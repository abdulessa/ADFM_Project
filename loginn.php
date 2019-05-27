<?php


$host = "localhost";
$user = "root";
$password = "";
$database = "adfm";

$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
mysqli_select_db($con,$database) or die ("Database not found");

if(isset($_post["login"])){

  $username = $_post['username'];
  $password = $_post['password'];

  $sql = "select + from supervisor_db where username ='".$username."'
  AND password='".$password."' limit 1";

  $result = mysqli_query($sql);

  if(mysql_num_rows($result)==1){
    echo"you have succesfully logged in";

  }

  else{
    echo"you entered wrong password";

  }
}

?>
