<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Masuk</title>
		<!-- Logo Title -->
		<!-- Alt: https://i.postimg.cc/fLSGLvgc/logo-Yolove.png -->
		<link rel="icon" href="https://i.postimg.cc/13BpbhBT/logo.png">
		<!-- Icon -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<?php
		$nav1 = 0;
		$nav2 = 0;
		$nav3 = 0;
		$header = 0;
		include "navbar.php";
		?>

		<div class="container-sm container-md container-lg container-xl container-xxl">
			<div class="row m-sm-5">
				<div class="col-md-6">
					<main class="form-signin w-100 m-auto">
						<form>
							<div class="">
								<h1 class="h3 mt-5 mb-2 fw-normal">Selamat Datang!</h1>
								<h6>Login dengan Username</h6>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
								<label for="floatingInput">Username</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
								<label for="floatingPassword">Password</label>
							</div>
							<div class="col-6">
								<button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Log in</button>
							</div>
							<small class="text-center">Pengguna baru? Buat akun terlebih dahulu <a href="registrasi.php" class="fw-semibold text-secondary text-decoration-none">disini</a> </small>
						</form>
					</main>
				</div>
			</div>
		</div>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>