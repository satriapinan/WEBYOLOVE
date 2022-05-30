<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Daftar</title>
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
				<div class="col-lg-6">
					<main class="form-registration w-100">
						<form action="" method="">
							<div class="text">
								<h1 class="h3 mt-5 mb-1 fw-normal">Selamat Datang!</h1>
								<h6 class="mb-3">Daftar akun terlebih dahulu untuk memulai belanja</h6>
							</div>
							<div class="form-floating mb-3">
								<input type="username" name="username" class="form-control" id="username" placeholder="username" >
								<label for="username">Username</label>
							</div>
							<div class="form-floating mb-3">
								<input type="name" name="name" class="form-control" id="name" placeholder="name">
								<label for="name">Nama lengkap</label>
							</div>
							<div class="form-floating mb-3">
								<input type="telpon" name="telpon" class="form-control" id="telpon" placeholder="telpon" >
								<label for="telpon">No. Telepon</label>
							</div>
							<div class="form-floating mb-3">
								<input type="email" name="email" class="form-control" id="email" placeholder="email">
								<label for="email">Email</label>
							</div>
							<div class="form-floating mb-3">
								<input type="pasword" name="pasword" class="form-control" id="pasword" placeholder="pasword" >
								<label for="pasword">Password</label>
							</div>
							<div class="checkbox mb-3 mt-2">
							</div>
							<div class="col-6">
								<button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Daftar</button>
							</div>
							<small class="text-center">Sudah punya akun? Silahkan <a href="login.php" class="text-secondary text-decoration-none fw-semibold">Log in</a> </small>
						</form>
					</main>
				</div>
			</div>
		</div>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>