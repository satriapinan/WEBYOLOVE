<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Profile - Tambah Alamat</title>
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
			<div class="row justify-content-between">
				<div class="col-6">
					<h3 class="text-secondary">Tambah Alamat</h3>
					<form action="pembayaran2.php">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="namadepan" placeholder="Nama depan penerima" aria-label="First name">
							<label for="namadepan">Nama penerima</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat" >
							<label for="alamat">Alamat</label>
						</div>
						<div class="row">
							<div class="form-floating col-6 mb-3">
								<input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="kecamatan" >
								<label for="kecamatan" class="ms-3">Kecamatan</label>
							</div>
							<div class="form-floating col-6 mb-3">
								<input type="text" name="kotakab" class="form-control" id="kotakab" placeholder="kotakab" >
								<label for="kotakab" class="ms-3">Kota/Kabupaten</label>
							</div>
						</div>
						<div class="row">
							<div class="form-floating col-6 mb-3">
								<input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="provinsi" >
								<label for="provinsi" class="ms-3">Provinsi</label>
							</div>
							<div class="form-floating col-6 mb-3">
								<input type="number" name="kodepos" class="form-control" id="kodepos" placeholder="kodepos" >
								<label for="kodepos" class="ms-3">Kode Pos</label>
							</div>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="tambahan" placeholder="Tambahan" aria-label="tambahan">
							<label for="tambahan">Tambahan</label>
						</div>
						<button class="w-100 btn btn-lg btn-primary" type="submit">Tambah</button>
					</form>
				</div>
				<div class="col-5">
					<h3 class="text-secondary mb-3">Alamat yang Tersimpan</h3>
					<a href="profile_edit.php" class="rounded btn btn-outline-secondary text-start w-100">
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<h5 class="mb-0">Satria Pinandita Abyatarsyah</h5>
								<p class="fw-light mb-0">Jl. Tampomas Blok 21 No.2, Indramayu</p>
							</div>
							<div>
								<i class="fa fa-pencil-square-o fs-4"></i>
							</div>
						</div>
					</a>
				</div>
			</div>
		</main>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>