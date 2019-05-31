<?php
//Connect with MYSQL
$host = "localhost";
$user = "root";
$password = "";
$database = "adfm";

$con = mysqli_connect( $host, $user, $password, $database )or die( "Cant connect" );
mysqli_select_db( $con, $database )or die( "Database not found" );

if ( isset( $_POST[ 'insert' ] ) ) {

	$GLOBALS[ 'username' ] = $_POST[ 'Username' ];

	$GLOBALS[ 'email' ] = $_POST[ 'email' ];

	$GLOBALS[ 'password' ] = $_POST[ 'password' ];


	$sql = "INSERT INTO supervisor_db (username, email, password) VALUES ('$username','$email','$password')";

	if ( empty( $username ) ) {
		echo "Username is not inserted";
		header( "refresh:1; url=index.html" );
	} elseif ( mysqli_query( $con, $sql ) ) {
		header( "Location:index.html" );
	}
	else {
		echo "Failed to save";

	}
}


if ( isset( $_POST[ 'submit_new_patient' ] ) ) {

	$name = $_POST[ 'name' ];
	$gender = $_POST[ 'gender' ];
	$age = $_POST[ 'age' ];
	$education = $_POST[ 'education' ];
	$residence = $_POST[ 'residence' ];
	$job = $_POST[ 'job' ];
	$children = $_POST[ 'children' ];
	$ethnicity = $_POST[ 'ethnicity' ];
	$languages = $_POST[ 'languages' ];
	$workplace = $_POST[ 'workplace' ];


	$sql = "INSERT INTO patient_form (name, gender, age, education, residence,
	job, children, ethnicity, languages, workplace)
 VALUES ('$name','$gender','$age', '$education', '$residence',
	'$job', '$children', '$ethnicity', '$languages', '$workplace' )";

	if ( empty( $name ) ) {
		echo "Username is not inserted";
		header( "refresh:1; url=home.html" );
	} elseif ( mysqli_query( $con, $sql ) ) {
		header( "Location:home.html" );
	}
	else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}
$con->close();
?>