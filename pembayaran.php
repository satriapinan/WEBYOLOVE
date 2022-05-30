<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Menyelesaikan Pemesanan</title>
		
		<!-- Logo Title -->
		<!-- Alt: https://i.postimg.cc/fLSGLvgc/logo-Yolove.png -->
		<link rel="icon" href="https://i.postimg.cc/13BpbhBT/logo.png">
		<!-- Icon -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/pembayaran.css">
	</head>
	<body>
		<?php
		$nav1 = 0;
		$nav2 = 0;
		$nav3 = 0;
		$header = 0;
		include "navbar.php";
		?>
		
		<main class="form-registration">
			<div class="container">
				<div class="atas">
					<h3 class="satu">Menyelesaikan Pemesanan</h3>
					<small><h6 class="dua text-secondary">Alamat</h6></small>
					<hr class="tiga">
					<small><h6 class="empat text-primary">Pengiriman</h6></small>
					<hr class="lima">
					<small><h6 class="enam text-primary">Pembayaran</h6></small>
				</div>
				<div class="row justify-content-between">
					<form action="pembayaran2.php" class="col-6">
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="mt-4 mb-3">Alamat Tujuan</h5>
							<div class="dropdown mt-4 mb-3">
								<a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									Alamat Tersimpan
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">Alamat1</a></li>
									<li><a class="dropdown-item" href="#">Alamat2</a></li>
									<li><a class="dropdown-item" href="#">Alamat3</a></li>
								</ul>
							</div>
						</div>
						<div class="form-floating mb-3">
							<input type="namadepan" class="form-control" id="namadepan" placeholder="Nama depan penerima" aria-label="First name">
							<label for="namadepan" class="ms-2">Nama penerima</label>
						</div>
						<div class="form-floating mb-3">
							<input type="alamat" name="alamat" class="form-control" id="alamat" placeholder="alamat" >
							<label for="alamat" class="ms-2">Alamat</label>
						</div>
						<div class="row">
							<div class="form-floating col-6 mb-3">
								<input type="kecamatan" name="kecamatan" class="form-control" id="kecamatan" placeholder="kecamatan" >
								<label for="kecamatan" class="ms-2">Kecamatan</label>
							</div>
							<div class="form-floating col-6 mb-3">
								<input type="kotakab" name="kotakab" class="form-control" id="kotakab" placeholder="kotakab" >
								<label for="kotakab" class="ms-2">Kota/Kabupaten</label>
							</div>
						</div>
						<div class="row">
							<div class="form-floating col-6 mb-3">
								<input type="provinsi" name="provinsi" class="form-control" id="provinsi" placeholder="provinsi" >
								<label for="provinsi" class="ms-2">Provinsi</label>
							</div>
							<div class="form-floating col-6 mb-3">
								<input type="kodepos" name="kodepos" class="form-control" id="kodepos" placeholder="kodepos" >
								<label for="kodepos" class="ms-2">Kode Pos</label>
							</div>
						</div>
						<div class="form-check mb-3">
							<input name="ingatAlamat" class="form-check-input" type="checkbox" value="yes">
							<label class="form-check-label" for="ingatAlamat">
								Ingat alamat
							</label>
						</div>
						<button class="w-100 btn btn-lg btn-primary" type="submit">Pilih Jasa Pengiriman</button>
					</form>
					<div class="col-5">
						<div class="card mb-3" style="max-width: 540px;">
							<div class="row g-0">
								<div class="col-md-4">
									<div class="w-100 h-100" style="max-width: 200px; min-height: 160px; max-height: 160px;">
										<img src="img/baloon flower.jpeg" class="w-100 h-100 rounded" alt="...">
									</div>
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h4 class="card-title mb-1">Baloon Flower</h4>
										<p class="card-text mb-0"><small class="text-muted">Harga: Rp 100.000;</small></p>
										<p class="card-text mb-4"><small class="text-muted">Jumlah: 2</small></p>
										<p class="card-text mb-0"><small class="text-muted">Harga Barang:</small></p>
										<h5>Rp 200.000;</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between mb-2">
							<span>Subtotal</span>
							<span class="fw-semibold">Rp 200.000;</span>
						</div>
						<span style="background: #d4d9df; width: 100%; height: 2px; display: inline-block"></span>
						<div class="d-flex justify-content-between mt-2">
							<span>Total</span>
							<span class="fw-semibold">Rp 200.000;</span>
						</div>
					</div>
				</div>
			</div>
		</main>
		
		<?php
		include "footer.php";
		?>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>