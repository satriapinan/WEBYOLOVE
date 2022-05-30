<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Tentang</title>
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
		$nav3 = 1;
		$header = 0;
		include "navbar.php";
		?>
		<main class="container-sm container-md container-lg container-xl container-xxl">
			<div class="row align-items-center mb-5">
				<div class="col d-flex justify-content-center">
					<img src="img/logo.png" alt="logo yolove" class="img-fluid w-75">
				</div>
				<div class="col">
					<h1 class="mb-0 fw-light">Apa itu <span class="text-secondary fw-normal">Yolove</span>?</h1>
					<span class="bg-primary" style="width: 100%; height: 2px; display: inline-block"></span>
					<p>Yolove adalah usaha rumahan yang terdiri dari beberapa jenis usaha, diantaranya adalah boquete, baloon, case, dll.
					Yolove berusaha memberikan yang terbaik untuk anda, pelanggan, bisa memberikan hadah yang terbaik untuk orang yang terbaik.</p>
				</div>
			</div>
			<div class="justify-content-center mb-5">
				<h1 class="mb-0 text-center fw-light">
				<span class="text-secondary fw-normal">Produk </span>Kami!
				</h1>
				<span class="bg-primary mb-2" style="width: 100%; height: 2px; display: inline-block"></span>
				<div class="row row-cols-2">
					<div class="card col">
						<img src="img/card1.jpg" class="card-img-top rounded" alt="bouquet">
						<div class="card-body p-0">
							<h5 class="card-title fs-4">Bouquet</h5>
							<p class="card-text">Kumpulan bahan-bahan dengan rangkaian atau design yang kreatif dan menarik. Karangan atau rangkaian dapat diatur sesuai selera dan biasanya dapat digenggam.</p>
						</div>
					</div>
					<div class="card col">
						<img src="img/card2.jpg" class="card-img-top rounded" alt="case">
						<div class="card-body p-0">
							<h5 class="card-title fs-4">Case</h5>
							<p class="card-text">Pelindung <i>smartphone</i> agar terhindar dari dampak benturan, dan juga mempercantik tampilan dari <i>smartphone</i>-mu. Memiliki 2 tipe, yaitu <i>hardcase</i> (tekstur keras) dan <i>softcase</i> (tekstur lembut).</p>
						</div>
					</div>
				</div>
			</div>
			<div class="py-3"></div>
			<div class="row justify-content-center mt-5">
				<div class="col-4">
					<h1 class="mb-0 text-center fw-light">Hubungi <span class="text-secondary fw-normal">Kami</span>?</h1>
					<span class="bg-primary" style="width: 100%; height: 2px; display: inline-block"></span>
					<div class="d-flex flex-column align-items-center">
						<a href="" class="link-secondary text-decoration-none fs-5">
							<i class="fa fa-instagram me-1"></i>buketby_yolove
						</a>
						<a href="" class="link-secondary text-decoration-none fs-5">
							<i class="fa fa-instagram me-1"></i>yolovecase
						</a>
						<a href="" class="link-secondary text-decoration-none fs-5">
							<i class="fa fa-whatsapp me-1"></i>+62 812-7236-0336
						</a>
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