
<?php
   include('login.php');
   $session_id=$_SESSION['id'];
   //get personal info of the person that is login
   $query=mysqli_query($conn,"select * from personalinfo where id=$session_id ")or die(mysqli_error($conn));
   foreach($query as $record){
      $studentid=$record['student_id'];
      $fullname=$record['full_name'];
      $courseperiod=$record['course_period'];
      $paymentinfo=$record['payment_information'];
      $birth=$record['date_of_birth'];
      $gender=$record['gender'];
      $idno=$record['id_no'];
      $email=$record['email'];
      $phone=$record['phone'];
      $citizenship=$record['citizenship'];
      $marital=$record['marital_status'];
      $religion=$record['religion'];
      $campus=$record['campus'];
      $intake=$record['intake'];
      $level=$record['level'];
   }
   //getting course of the student
   $select_course=mysqli_query($conn,"select * from courseapplied where student_id=$session_id ")or die(mysqli_error($conn));
   foreach($select_course as $course_record){
       $course=$course_record['course'];

   }

?>
<?php include('sidebar.php'); ?>
<?php include('navbar.php'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control"  value="<?php echo $fullname?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Student id</label>
                                                <input type="text" class="form-control"   value="<?php echo$studentid?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Course period</label>
                                                <input type="email" class="form-control" placeholder="Email" value="<?php echo$courseperiod?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Payment information</label>
                                                <input type="text" class="form-control"  value="<?php echo $paymentinfo?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth</label>
                                                <input type="text" class="form-control"  value="<?php echo $birth?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" value="<?php echo $gender?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Id no/Birth certificate no</label>
                                                <input type="text" class="form-control"  value="<?php echo$idno?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control"  value="<?php echo$email?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phonenumber</label>
                                                <input type="text" class="form-control"  value="<?php echo $phone?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Citizenship</label>
                                                <input type="text" class="form-control" value="<?php echo$citizenship?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Marital Status</label>
                                                <input type="text" class="form-control" value="<?php echo $marital?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <input type="text" class="form-control"  value="<?php echo$religion?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Campus</label>
                                                <input type="text" class="form-control"  value="<?php echo$campus?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Intake</label>
                                                <input type="text" class="form-control"  value="<?php echo$intake?>">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Level</label>
                                                <input type="text" class="form-control"  value="<?php echo$level?>">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="images/user.png" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="images/user.png" alt="..."/>

                                      <h4 class="title"><?php echo$fullname?><br />
                                         <small><?php echo$course?></small>
                                      </h4>
                                    </a>
                                </div>
                               
                            </div>
                            <hr>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php include('footer.php'); ?>
