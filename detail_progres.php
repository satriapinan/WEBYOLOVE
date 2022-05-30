<?php

session_start();

include("config.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Detail Status Pesanan</title>

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
			<h3 class="text-secondary mb-4">Detail Status Pesanan</h3>
			<div class="row justify-content-between">
				<div class="col-7">
					<div class="row">
						<h5 class="text-secondary col-3 text-center">Pembayaran</h5>
					</div>
					<div class="row align-items-center">
						<div class="col-3 text-center justify-content-center d-flex">
							<span style="background: #d4d9df; width: 2px; height: 75px; display: inline-block"></span>
						</div>
						<div class="col-9">
							<ul class="text-secondary mb-0">
								<li class="text-decoration-line-through text-muted">Menunggu bukti pembayaran</li>
								<li class="fw-semibold">Menunggu pembayaran dikonfirmasi oleh kami</li>
								<li>Pembayaran selesai</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<h5 class="text-secondary col-3 text-center">Pembuatan</h5>
					</div>
					<div class="row align-items-center">
						<div class="col-3 text-center justify-content-center d-flex">
							<span style="background: #d4d9df; width: 2px; height: 75px; display: inline-block"></span>
						</div>
						<div class="col-9">
							<ul class="text-secondary mb-0">
								<li>Pesanan sedang dibuat (Estimasi selesai: - hari)</li>
								<li>Pesanan telah selesai dibuat!</li>
								<li>Pesnanan sedang dipacking</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<h5 class="text-secondary col-3 text-center">Pengiriman</h5>
					</div>
					<div class="row align-items-center">
						<div class="col-3 text-center justify-content-center d-flex">
							<span style="background: #d4d9df; width: 2px; height: 75px; display: inline-block"></span>
						</div>
						<div class="col-9">
							<ul class="text-secondary mb-0">
								<li>Pesanan dikirim ke pelanggan (Estimasi sampai: - jam)</li>
								<li>Pesanan telah sampai!</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<h5 class="text-secondary col-3 text-center">Sampai</h5>
					</div>
				</div>
				<div class="col-5">
					<h5 class="text-secondary">Produk</h5>
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
					<div class="d-flex justify-content-between">
						<span>Biaya pengiriman</span>
						<span class="fw-semibold">Rp 15.000;</span>
					</div>
					<span style="background: #d4d9df; width: 100%; height: 2px; display: inline-block"></span>
					<div class="d-flex justify-content-between mt-2">
						<span>Total</span>
						<span class="fw-semibold">Rp 215.000;</span>
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