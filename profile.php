<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Profile</title>
		<!-- Logo Title -->
		<!-- Alt: https://i.postimg.cc/fLSGLvgc/logo-Yolove.png -->
		<link rel="icon" href="https://i.postimg.cc/13BpbhBT/logo.png">
		<!-- Icon -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<style>
			* {
				/*border: 1px solid black;*/
			}
		</style>
	</head>
	<body>
		<?php
		$nav1 = 0;
		$nav2 = 0;
		$nav3 = 0;
		$header = 0;
		include "navbar.php";
		?>
		<main class="container-sm container-md container-lg container-xl container-xxl">
			<div class="row justify-content-center pt-5">
				<div class="col-6 text-center justify-content-center mt-5">
					<i class="fa fa-user-o fs-1 text-secondary"></i>
					<h1 class="mb-0 text-center fw-light">Satria Pinandita Abyatarsyah</span></h1>
					<span class="bg-primary" style="width: 100%; height: 2px; display: inline-block"></span>
					<div class="row justify-content-center">
						<div class="col text-start">
							<h5 class="fw-light">Username</h5>
							<h5 class="fw-light">Email</h5>
							<h5 class="fw-light">No. Telepon</h5>
						</div>
						<div class="col text-start">
							<h5 class="fw-normal">satriapinan</h5>
							<h5 class="fw-normal">satriapinan@gmail.com</h5>
							<h5 class="fw-normal">08333333333</h5>
						</div>
						<div class="col d-flex flex-column justify-content-center">
							<a class="btn btn-primary mb-1" href="">Edit</a>
							<a class="btn btn-secondary" href="profile_edit.php">Tambah Alamat</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>