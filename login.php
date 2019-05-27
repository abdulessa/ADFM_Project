<?php
session_start();
include("usersdb.php");
$username = @$_POST['username'];
$password = @$_POST['password'];
$db = "adfm";

$submitlog   = @$_POST['login'];
$encpassword = md5($password);



if($submitlog) {
  // username and password sent from form
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM supervisor_db WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
if($count == 1) {
     $_SESSION['userlog']=$myusername;
   echo "username is $myusername";
}else {
     echo  "Your Login Name or Password is invalid";
  };
}
?>
