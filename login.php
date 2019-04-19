<?php
session_start();
include('connect.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $admin=mysqli_query($conn,"select * from personalinfo where email='$username'and id_no='$password'");
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
            $_SESSION['id']=$rows2['id'];
            ?>
              <script>
              window.alert('login successfull');
              window.location.href="student_portal.php";
              </script>
            <?php
			
		}
	}else{
        ?>
            <script>
              window.alert('login failed');
              window.location.href="index.php";
              </script>
        <?php
	}
}
?>