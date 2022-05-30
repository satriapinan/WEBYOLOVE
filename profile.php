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
			<h3 class="text-secondary">Biodata Diri</h3>
			<div class="row justify-content-between">
				<div class="col-6">
					<h6>Lengkapi Biodata</h6>
					<form action="profile.php" method="POST">
						<div class="row mb-3">
							<label for="nama" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-9">
								<input name="nama" type="text" class="form-control" id="nama">
							</div>
						</div>
						<div class="row mb-3">
							<label for="username" class="col-sm-3 col-form-label">Username</label>
							<div class="col-sm-9">
								<input name="username" type="text" class="form-control" id="username">
							</div>
						</div>
						<div class="row mb-3">
							<label for="email" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input name="email" type="email" class="form-control" id="email">
							</div>
						</div>
						<div class='row mb-3 align-items-center'>
							<label for="inputGender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-9" id="inputGender">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki">
									<label class="form-check-label" for="gender1">Laki-laki</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan">
									<label class="form-check-label" for="gender2">Perempuan</label>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<label for="tl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-9">
								<input name="tl" type="date" class="form-control" id="tl">
							</div>
						</div>
						<div class="row mb-3">
							<label for="telp" class="col-sm-3 col-form-label">No. Telepon</label>
							<div class="col-sm-9">
								<input name="telp" type="telp" class="form-control" id="telp">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Edit Biodata</button>
						<a class="btn btn-secondary" href="profile_edit.php">Tambah Alamat</a>
					</form>
				</div>
				<div class="col-5">
					<div class="card w-100 text-center border rounded py-4">
						<div>
							<img src="img/user.png" class="img-fluid w-50 rounded-circle" alt="User Photo">
						</div>
						<div class="card-body">
							<form action="profile.php" method="POST" class="d-flex justify-content-center">
								<div class="mb-2 mt-3 w-25">
									<input name="userImg" class="form-control" type="file" id="userImg">
								</div>
							</form>
							<p class="card-text mb-0 text-muted">ukuran gambar: maks 1mb</p>
							<p class="card-text text text-muted">format gambar: JPEG, PNG</p>
						</div>
					</div>
				</div>
			</div>
		</main>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>