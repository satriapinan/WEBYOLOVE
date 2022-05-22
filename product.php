<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Home</title>
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
			<nav class="navbar navbar-expand-lg navbar-light">
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
								<a class="nav-link active fw-semibold" href="product.php">Product</a>
							</li>
							<li class="nav-item me-3">
								<a class="nav-link" href="about.php">About</a>
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
			<div class="container-sm container-md container-lg container-xl container-xxl bg-primary py-3">
				<h3 class="text-secondary">Cari Produk Mu!</h3>
				<p>Temukan bouquet dan case kesukaan mu disini!</p>
			</div>
		</header>
		<main class="container-sm container-md container-lg container-xl container-xxl">
			<div class="row">
				<div class="col-3">
					<h5 class="fw-bold text-secondary">Filter</h5>
					<p class="fw-semibold text-secondary">Kategori</p>
					<form>
						<div class="form-check">
							<input name="categoryFilter" class="form-check-input" type="checkbox" value="buket" id="Buket">
							<label class="form-check-label fw-semibold" for="buket">
								Buket
							</label>
						</div>
						<div class="form-check">
							<input name="categoryFilter" class="form-check-input" type="checkbox" value="case" id="case">
							<label class="form-check-label fw-semibold" for="case">
								Case
							</label>
						</div>
					</form>
				</div>
				<div class="col-9">
					<form class="col-4">
						<div class="input-group mb-2">
							<span class="input-group-text bg-secondary text-white fw-bold rounded-0">Urut</span>
							<select class="form-select bg-secondary text-white rounded-0">
								<option selected value="abjad">A-Z</option>
								<option value="tertinggi">Harga Tertinggi</option>
								<option value="terendah">Harga Terendah</option>
								<option value="terbaru">Terbaru</option>
							</select>
						</div>
					</form>
					<p class="mb-0">Menampilkan <b>6</b> dari <b>10</b> produk</p>
					<div class="row">
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
						<a href="product_detail.php" class="col-4 py-3 text-black text-decoration-none position-relative">
							<img src="img/bouquet uang 50k(2).jpeg" class="w-100 rounded-3" style="height: 300px;">
							<h5 class="mt-2 mb-1">Buket Silverqueen</h5>
							<h6>Rp 50.000,00</h6>
						</a>
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