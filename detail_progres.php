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
		<header class="container-fluid bg-primary mb-5">
			<nav class="navbar navbar-expand-lg navbar-light bg-primary">
				<div class="container-sm container-md container-lg container-xl container-xxl">
					<a class="navbar-brand me-3" href="index.php">
						<img src="img/logo.png" alt="logo yolove" width="100">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item me-2">
								<a class="nav-link" aria-current="page" href="index.php">Home</a>
							</li>
							<li class="nav-item me-2">
								<a class="nav-link" href="product.php">Product</a>
							</li>
							<li class="nav-item me-3">
								<a class="nav-link" href="#">About</a>
							</li>
						</ul>
						<form class="w-100 me-4 mb-3 mb-lg-0">
							<div class="input-group">
								<button name="submitSearch" type="submit" class="input-group-text text-black-50" id="search">
								<i class="fa fa-search"></i>
								</button>
								<input name="search" class="form-control" type="search" placeholder="Search product.." aria-label="Search" aria-describedby="search">
							</div>
						</form>
						<div class="d-flex">
							<a href="" class="btn btn-outline-light me-2">Login</a>
							<a href="" class="btn btn-light">Register</a>
						</div>
					</div>
				</div>
			</nav>
		</header>
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
		<footer class="container-fluid py-4 bg-primary mt-5">
			<div class="d-flex justify-content-center">
				<a href="" class="me-3 text-secondary text-decoration-none fw-semibold">
					<i class="fa fa-instagram me-1"></i>buketby_yolove
				</a>
				<a href="" class="text-secondary text-decoration-none fw-semibold">
					<i class="fa fa-instagram me-1"></i>yolovecase
				</a>
			</div>
		</footer>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>