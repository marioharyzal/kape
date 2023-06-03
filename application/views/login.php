<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login SIKam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animate/animate.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/select2/select2.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main.css'); ?>">
	<!--===============================================================================================-->
	<!-- style -->
	<style>
		.kiribawah {
			margin-left: 10px;
			position: absolute;
			z-index: 10;
			margin-top: 850px;
		}

		.container-login100 {
			background-image: url('/kape/assets/img/header-bg1.jpeg');
			background-position: center;
			background-size: cover;
		}

		/* .wrap-login100 {
			background: rgba(0, 0, 0, 0.3);
			border-radius: 10px;
		} */
	</style>
</head>

<body>

	<div class="limiter">
		<!-- <div class="kiribawah">
			<a href="<?php echo base_url(''); ?>">
				<button class="btn btn-secondary">Kembali</button>
			</a>
		</div> -->
		<div class="container-login100">


			<div class="mb-3">

			</div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('index.php/auth/login'); ?>">
					<span class="login100-form-title p-b-55" >
						Sistem Pakar Diagnosis Penyakit Pada Kambing Anglo Nubian
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<?php if (validation_errors()) : ?>
						<div class="text-center p-t-12">
							<span class="txt2">
								<?php echo validation_errors('<p>', '</p>'); ?>
							</span>
						</div>
					<?php endif; ?>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit" name="submit" value="login">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn p-t-25" style="background-color: ;">
						<a class="login100-form-btn" href="<?php echo base_url(''); ?>">
							Kembeli
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/select2/select2.min.js'); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('js/main.js'); ?>"></script>

</body>

</html>