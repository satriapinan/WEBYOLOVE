<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Status Barang</title>
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
			<h3 class="text-secondary">Status Pesanan</h3>
			<p class="text-secondary">Pantau progres barang pesanan mu di sini!</p>
			<div class="d-flex justify-content-between border-bottom mb-3">
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
				<div class="w-30">
					<div class="mb-5">
						<p class="mb-0 fw-semibold">Status transaksi: <span class="text-secondary">Belum bayar</span></p>
						<p class="mb-0 fw-semibold">Status Barang: -</p>
						<p class="mb-0 fw-semibold">Estimasi barang sampai: -</p>
					</div>
					<div class="d-flex justify-content-end">
						<a href="" class="btn btn-primary">Bayar</a>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-between border-bottom mb-3">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<div class="w-100 h-100" style="max-width: 200px; min-height: 160px; max-height: 160px;">
								<img src="img/baloon snack.jpeg" class="w-100 h-100 rounded" alt="...">
							</div>
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h4 class="card-title mb-1">Baloon Snack</h4>
								<p class="card-text mb-0"><small class="text-muted">Harga: Rp 75.000;</small></p>
								<p class="card-text mb-4"><small class="text-muted">Jumlah: 3</small></p>
								<p class="card-text mb-0"><small class="text-muted">Harga Barang:</small></p>
								<h5>Rp 225.000;</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="w-30">
					<div class="mb-5">
						<p class="mb-0 fw-semibold">Status transaksi: <span class="text-secondary">Sudah dibayar</span></p>
						<p class="mb-0 fw-semibold">Status Barang: Barang sedang dibuat</p>
						<p class="mb-0 fw-semibold">Estimasi barang sampai: 1 hari</p>
					</div>
					<div class="d-flex justify-content-end">
						<a href="detail_progres.php" class="btn btn-primary">Detail</a>
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