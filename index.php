<?php

session_start();

include("config.php");
$query = "SELECT * FROM produk";
$produk = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Beranda</title>
		<!-- Logo Title -->
		<!-- Alt: https://i.postimg.cc/fLSGLvgc/logo-Yolove.png -->
		<link rel="icon" href="https://i.postimg.cc/13BpbhBT/logo.png">
		<!-- Icon -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/home.css">
	</head>
	<body>
		<?php
		$nav1 = 1;
		$nav2 = 0;
		$nav3 = 0;
		$header = 0;
		include "navbar.php";
		?>

		<main class="container-sm container-md container-lg container-xl container-xxl">
			<h1 class="text-center mt-5">Temukan <mark class="satu">Bouquet</mark> dan <mark class="satu">Case</mark></h1>
			<h1 class="text-center mb-4"><mark class="satu">Favorit</mark> Anda <mark class="satu">Disini!</mark></h1>
			<div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="true">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/karosel1.jpg" class="d-block w-100" alt="..." >
					</div>
					<div class="carousel-item">
						<img src="img/karosel2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="img/karosel3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="img/karosel4.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
				</button>
			</div>
			<hr class="dua">
			<h1 class="tiga">Produk Terbaru</h1>
			<div class="row">
				<?php
				$i = 0;
				while(($row = mysqli_fetch_array($produk, MYSQLI_ASSOC)) && ($i<3)) {
					echo "<a href='product_detail.php?id_produk={$row['id_produk']}'
							class='col-4 py-3 text-black text-decoration-none position-relative'>
							<img src='img/{$row['gambar']}'
							class='w-100 rounded-3' style='height: 400px;'>
								<h5 class='mt-2 mb-1'>{$row['nama_produk']}</h5>
								<h6>Rp {$row['harga_produk']};</h6>
						</a>";
					$i++;
				}
				?>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="product.php?buket=yes" class="card bg-dark text-white mb-5">
							<img src="img/card1.jpg" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h3 class="empat">Bouquet</h3>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="product.php?case=yes" class="card bg-dark text-white mb-5">
							<img src="img/card2.jpg" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h3 class="empat">Case</h3>
							</div>
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