<?php include('login.php')?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">upload project</h4>
                            </div>
                            <div class="content">
                                <form  action="" method="POST" enctype="multipart/form-data">
                                 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>project name</label>
                                                <input type="text" class="form-control" name="projectname" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>zip file</label>
                                                <input type="file" class="form-control" name="zip_file" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>documentation</label>
                                                <input type="file" class="form-control" name="pdf_file" required>
                                            </div>
                                        </div>
                                        
                                     </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>project description</label>
                                                <textarea rows="5" class="form-control" name="description" required ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="project_submit" class="btn btn-info btn-fill pull-right" value="submit">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>


<?php include('footer.php')?>


<?php
include('login.php');
include('connect.php');
if(isset($_POST['project_submit'])){
    $studentid=$_SESSION['id'];
    $projectname=$_POST['projectname'];
    $description=$_POST['description'];
    $documentation=$_FILES['pdf_file']['name'];
    $file_name=$_FILES['zip_file']['name'];
    $date= date('d/m/Y');
    $status="null";
    $comment="null";
    //checking if zipfile and pdf file are not empty

    if($_FILES['zip_file']['name'] != '')  
       {  
            $file_name = $_FILES['zip_file']['name'];  
            $array = explode(".", $file_name);  
            $name = $array[0];  
            $ext = $array[1];  
            if($ext == 'zip')  
            {  
                 $path = 'uploads/';  
                 $location = $path . $file_name;  
                 if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location))  
                 {  
                  $query=mysqli_query($conn,"INSERT INTO student_project(id,student_id,project_name,description,documentation,upload,status)VALUE(NULL,'$student_id','$project_name','$description','$documentation','$file_name','$status')")or die(mysqli_error($conn));
                  if($query){
                      ?>
                    <script>alert("Success");
                    window.location.href='upload-documentation.php';
                    </script>
                    <?php
                  }else{
                      echo"failed";
                  }
                 }  
            }  else{
              echo "please choose zip file";
            }
       }  
}else{echo"data not set";}

?>