<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "adfm";

$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
mysqli_select_db($con,$database) or die ("Database not found");


?>
