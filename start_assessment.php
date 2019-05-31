<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/start_assessment.js"></script>
	<script src="js/jquery.min.js"></script>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container"> <a class="navbar-brand" href="index.html"><i class="flaticon-ADFM"></i>ADFM <br>
    <small>Website</small></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"> <span class="oi oi-menu"></span> Menu </button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="home.html" class="nav-link">HOME</a>
					</li>
					<li class="nav-item"><a href="#" class="nav-link">MoCA COGNITIVE ASSESSMENT</a>
					</li>
					<li class="nav-item"><a href="patient_form.html" class="nav-link">NEW PATIENT</a>
					</li>
					<li class="nav-item cta"><a href="register.html" class="nav-link"><span>SIGN UP!</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<?php
	//Connect with MYSQL
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "adfm";

	$con = mysqli_connect( $host, $user, $password, $database )or die( "Cant connect" );
	mysqli_select_db( $con, $database )or die( "Database not found" );

	?>

	<div class="col middle-page" align="center">
		<p>Select Patient</p>
		<div class="d-table-row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Patient</th>
						<th scope="col">Start Assessment</th>
					</tr>
				</thead>
				<tbody id="paitients_list">
				</tbody>
			</table>
		</div>
	</div>

	<?php

	$sql = "SELECT name FROM patient_form";
	$result = $con->query( $sql );

	if ( $result->num_rows > 0 ) {
		$num_patient = 0;
		// output data of each row
		while ( $row = $result->fetch_assoc() ) {
			echo( '<script>add_patient( ' . $num_patient . ', "' . $row[ "name" ] . '");fetch_patient_list();</script>' );
			$num_patient++;
		}
	} else {
		echo "No registered patients";
	}
	?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
		</svg>
	</div>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<!--script src="js/google-map.js"></script-->
	<script src="js/main.js"></script>

</body>
</html>