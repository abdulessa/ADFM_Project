<?php
error_reporting(E_ALL); ini_set('display_errors', 'On');
session_start();
session_destroy();
echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
?>
