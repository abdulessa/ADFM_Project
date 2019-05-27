<?php
	//Connect with MYSQL
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "adfm";

	$con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
	mysqli_select_db($con,$database) or die ("Database not found");

	if (isset($_POST['insert'])){

		 $GLOBALS['username'] =$_POST['Username'];

		 $GLOBALS['email'] = $_POST['email'];

		 $GLOBALS['password'] = $_POST['password'];


$sql = "INSERT INTO supervisor_db (username, email, password) VALUES ('$username','$email','$password')";

		if(empty($username)){
				echo "Username is not inserted";
				header("refresh:1; url=index.html");
		}
		elseif(mysqli_query($con, $sql)){
			header("Location:index.html");
		}
		else{
			echo "Failed to save";

		}
	}


	if (isset($_POST['submitnew'])){

		 $GLOBALS['name'] =$_POST['name'];
		 $GLOBALS['gender'] =$_POST['gender'];
		 $GLOBALS['age'] = $_POST['age'];
		 $GLOBALS['education'] = $_POST['education'];
		 $GLOBALS['residence'] = $_POST['residence'];
		 $GLOBALS['job'] = $_POST['work'];
		 $GLOBALS['children'] = $_POST['children'];
		 $GLOBALS['ethnicity'] = $_POST['ethnicity'];
		 $GLOBALS['languages'] = $_POST['languages'];
		 $GLOBALS['workplace'] = $_POST['workplace'];


$sql = "INSERT INTO patient_form (name, gender, age, education, residence,
	job, children, ethnicity, languages, workplace)
 VALUES ('$name','$gender','$age', '$education', '$residence',
	'$job', '$children', '$ethnicity', '$languages', '$workplace' )";

		if(empty($name)){
				echo "Username is not inserted";
				header("refresh:3; url=index.html");
		}
		elseif(mysqli_query($con, $sql)){
			header("Location:index.html");
		}
		else{
			echo "Failed to save";

		}
	}

?>
