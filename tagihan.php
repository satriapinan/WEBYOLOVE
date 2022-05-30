<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Tagihan</title>
		
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
				<div class="row justify-content-between">
					<div class="col-6">
						<h3 class="text-secondary">Tagihan</h3>
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
						<div class="mt-5">
							<h5 class="text-secondary">Tata cara menyelesaikan tagihan:</h5>
							<p class="mb-0">1. Transfer ke nomor yang tertera di halaman tagihan (no.rek)</p>
							<p class="mb-0">2. Upload bukti telah membayar tagihan (transfer) berupa foto melalui form upload bukti bayar</p>
							<p class="mb-0">3. Tunggu hingga kami mengkonfirmasi pembayaran anda</p>
							<p class="mb-0">4. Apabila pembayaran telah dikonfirmasi, barang akan langsung diproses</p>
						</div>
					</div>
					<div class="col-5">
						<h5 class="text-secondary">Selesaikan pembayaran</h5>
						<p>No. Rek: 0xxxxxxxx (BNI)</p>
						<form action="detail_progres.php" method="POST" enctype='multipart/form-data'>
							<div class='form-group mb-3'>
								<label for='bukti' style='font-weight: 500;'>Upload bukti bayar</label>
								<input name='bukti' type='file' class='form-control' id='bukti'>
							</div>
							<button class="btn btn-primary w-100" type="submit">Selesaikan Pembayaran</button>
						</form>
						<a href="product.php" class="btn btn-outline-secondary w-100 mt-2">Lihat Produk Lainnya</a>
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