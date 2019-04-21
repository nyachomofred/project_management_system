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