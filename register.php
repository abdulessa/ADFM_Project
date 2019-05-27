	<title> Supervisor Signup Form </title>


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


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
	addEventListener("load", function() {
	setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
	window.scrollTo(0, 1);
	}
	</script>
	<!-- Custom Theme files -->
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- //web font -->

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html"><i class="flaticon-ADFM"></i>ADFM <br><small>Website</small></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		  </button>

		  <div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active"><a href="index.html" class="nav-link">HOME</a></li>
			  <li class="nav-item"><a href="about.html" class="nav-link">ABOUT</a></li>
			  <li class="nav-item"><a href="#" class="nav-link">COGNITIVE ASSESSMENT</a></li>
			  <li class="nav-item"><a href="contact.html" class="nav-link">CONTACT</a></li>
			  <li class="nav-item cta"><a href="register.html" class="nav-link"><span>Login</span></a></li>
			</ul>
		  </div>
		</div>
	</nav>

  <!-- main -->

  <div class="main-w3layouts wrapper">
    <h1>Supervisor SignUp Form</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="process.php" method="post">
          <input class="text" type="text" name="Username" placeholder="username" required="">
          <input class="text email" type="email" name="email" placeholder="Email" required="">
          <input class="text" type="password" name="password" placeholder="Password" required="">
          <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
          <div class="wthree-text">
            <label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
            <div class="clear"> </div>
          </div>
          <input type="submit" class="button" name="insert" value="SIGNUP" action = "index.html">
        </form>
        <p>Don't have an Account? <a href="login.html"> Login Now!</a></p>
      </div>
    </div>


    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>

    </ul>
  </div>
  <!-- //main
/*	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		$(function(){
			$('#register').click(function(e){
				var valid = this.form.checkValidity();
				if(valid){
				var username 	= $('#username').val();
				var email 		= $('#email').val();
				var password 	= $('#password').val();

					e.preventDefault();
					$.ajax({
						type: 'POST',
						url: 'process.php',
						data: {username: username,,email: email,,password: password},
						success: function(data){
						Swal.fire({
									'title': 'Successful',
									'text': data,
									'type': 'success'
									})

						},
						error: function(data){
							Swal.fire({
									'title': 'Errors',
									'text': 'There were errors while saving the data.',
									'type': 'error'
									})
						}
					});

				}else{

				}

			});

		});
	</script>*/ -->
</body>

</html>
