<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Product Detail</title>
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
								<a class="nav-link active fw-semibold" href="product.php">Product</a>
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
			<div class="row">
				<div class="col-6">
					<div id="carouselProductDetail" class="carousel slide" data-bs-ride="true">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselProductDetail" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselProductDetail" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselProductDetail" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/baloon flower.jpeg" class="d-block w-100 rounded" alt="..."
								style="height: 500px;">
							</div>
							<div class="carousel-item">
								<img src="img/baloon flower2.jpeg" class="d-block w-100 rounded" alt="..."
								style="height: 500px;">
							</div>
							<div class="carousel-item">
								<img src="img/baloon flower3.jpeg" class="d-block w-100 rounded" alt="..."
								style="height: 500px;">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselProductDetail" data-bs-slide="prev">
						<i class="fa fa-chevron-circle-left fs-1 icon-control" aria-hidden="true"></i>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselProductDetail" data-bs-slide="next">
						<i class="fa fa-chevron-circle-right fs-1 icon-control" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<div class="col-6">
					<h2 class="text-secondary">Buket Balon</h2>
					<h5>Rp 100.000,00</h5>
					<form>
						<div class="form-floating mb-3">
							<input readonly class="form-control-plaintext" id="description" placeholder="Deskripsi barang" value="deskripsi barang..">
							<label for="description">Deskripsi Barang</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="selectDetail" aria-label="selectDetail">
								<option selected>Pilih detail yang diinginkan..</option>
								<option value="1">Pink</option>
								<option value="2">Merah</option>
								<option value="3">Ungu</option>
							</select>
							<label for="selectDetail">Detail Pilihan</label>
						</div>
						<div class="form-floating mb-3">
							<textarea class="form-control" placeholder="Tolong barangnya.." id="note" style="height: 100px"></textarea>
							<label class="fw-semibold"for="note">Catatan</label>
						</div>
						<div class="form-floating mb-3">
							<input min="1" type="number" class="form-control" id="amount" placeholder="Banyak barang.." value="1" style="width: 90px;">
							<label for="floatingInput">Jumlah</label>
						</div>
						<button class="btn btn-primary w-15">Beli</button>
					</form>
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