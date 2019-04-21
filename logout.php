<?php
include('login.php');
session_destroy();
echo"loging out-----------";
header('refresh:2;url=index.php');

?>