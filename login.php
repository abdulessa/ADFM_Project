<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "adfm";

$con = mysqli_connect($host, $user, $password, $db) or die("Cant connect");
  mysqli_select_db($con,$db) or die ("Database not found");

$username = @$_POST['username'];
$password = @$_POST['password'];


$submitlog   = @$_POST['login'];
$encpassword = md5($password);



if($submitlog) {
  // username and password sent from form
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id FROM supervisor_db WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //  $active = $row['home.html'];
    $count = mysqli_num_rows($result);
if($count == 1) {
  header("Location:home.html");
     $_SESSION['userlog'] = $myusername;
   echo "username is $myusername";
}else {
     echo  "Your Login Name or Password is invalid";
  };
}
?>
