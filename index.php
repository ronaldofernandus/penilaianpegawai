<?php

include 'config/koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
		<title>Login</title>
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

			<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

			<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

			<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

			<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

			<link rel="stylesheet" type="text/css" href="dist/css/util.css">
			<link rel="stylesheet" type="text/css" href="dist/css/main.css">

	</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/kantorbkn.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				
				<form action="proseslogin.php" method="post"  class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username belom di isi">
						<input class="input100" type="text" name="Username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button type="login"  name="login" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center">
						<span class="txt1">
							Belom Punya Akun?
						</span>

						<a href="register.php" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>