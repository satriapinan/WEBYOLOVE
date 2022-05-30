<?php

session_start();

include("config.php");

$query = "SELECT * FROM produk ORDER BY nama_produk ASC";
$produk = mysqli_query($conn, $query);
$count_produk = mysqli_num_rows($produk);
$count_filter = mysqli_num_rows($produk);

if ((isset($_POST['buket'])) || (!empty($_GET['buket']))) {
	$query = "SELECT * FROM produk WHERE kategori_produk='Bouquet'";
	$produk = mysqli_query($conn, $query);
	$count_filter = mysqli_num_rows($produk);
	$_SESSION['kategori'] = 1;
	$_POST['buket'] = 'yes';
}
else if ((isset($_POST['case'])) || (!empty($_GET['case']))) {
	$query = "SELECT * FROM produk WHERE kategori_produk='Case'";
	$produk = mysqli_query($conn, $query);
	$count_filter = mysqli_num_rows($produk);
	$_SESSION['kategori'] = 2;
	$_POST['case'] = 'yes';
}

if(isset($_SESSION['kategori'])) {
	if (isset($_POST['urut'])) {
		if ($_SESSION['kategori']==1) {
			if ($_POST['urut'] == 'abjad') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Bouquet' ORDER BY nama_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'tertinggi') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Bouquet' ORDER BY harga_produk DESC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'terendah') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Bouquet' ORDER BY harga_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'terbaru') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Bouquet' ORDER BY id_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
		}
		else if ($_SESSION['kategori']==2) {
			if ($_POST['urut'] == 'abjad') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Case' ORDER BY nama_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'tertinggi') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Case' ORDER BY harga_produk DESC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'terendah') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Case' ORDER BY harga_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'terbaru') {
				$query = "SELECT * FROM produk WHERE kategori_produk='Case' ORDER BY id_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
		}else {
			if ($_POST['urut'] == 'abjad') {
				$query = "SELECT * FROM produk ORDER BY nama_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'tertinggi') {
				$query = "SELECT * FROM produk ORDER BY harga_produk DESC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'terendah') {
				$query = "SELECT * FROM produk ORDER BY harga_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
			else if ($_POST['urut'] == 'terbaru') {
				$query = "SELECT * FROM produk ORDER BY id_produk ASC";
				$produk = mysqli_query($conn, $query);
			}
		}
	}
}


?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Produk</title>

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
		$nav2 = 1;
		$nav3 = 0;
		$header = 1;
		include "navbar.php";
		?>

		<main class="container-sm container-md container-lg container-xl container-xxl">
			<div class="row">
				<div class="col-3">
					<h5 class="fw-bold text-secondary">Filter</h5>
					<p class="fw-semibold text-secondary">Kategori</p>
					<form action="product.php" method="post">
						<div class="form-check">
							<input name="buket" class="form-check-input" type="checkbox" value="buket"
							id="Buket" <?php if(isset($_POST['buket'])){echo 'checked';} ?>>
							<label class="form-check-label fw-semibold" for="buket">
								Buket
							</label>
						</div>
						<div class="form-check">
							<input name="case" class="form-check-input" type="checkbox" value="case"
							id="case" <?php if(isset($_POST['case'])){echo 'checked';} ?>>
							<label class="form-check-label fw-semibold" for="case">
								Case
							</label>
						</div>
						<button name="submitFilter" type="submit" class="mt-3 w-75 btn btn-primary">Filter</button>
					</form>
				</div>
				<div class="col-9">
					<form class="col-4" action="product.php" method="post">
						<div class="input-group mb-2">
							<button type="submit"
							class="input-group-text bg-secondary text-white fw-bold rounded-0">Urut</button>
							<select name="urut" class="form-select bg-secondary text-white rounded-0">
								<option selected>Pilih Urutan..</option>
								<option <?php
									if(isset($_POST['urut'])){
										if($_POST['urut']=='abjad'){echo 'selected';}}
								?> value="abjad">A-Z</option>
								<option <?php
									if(isset($_POST['urut'])){
										if($_POST['urut']=='tertinggi'){echo 'selected';}}
								?> value="tertinggi">Harga Tertinggi</option>
								<option <?php
									if(isset($_POST['urut'])){
										if($_POST['urut']=='terendah'){echo 'selected';}} 
								?> value="terendah">Harga Terendah</option>
								<option <?php 
									if(isset($_POST['urut'])){
										if($_POST['urut']=='terbaru'){echo 'selected';}}
								?> value="terbaru">Terbaru</option>
							</select>
						</div>
					</form>
					<p class="mb-0">Menampilkan <b><?php echo $count_filter;?></b> dari <b><?php echo $count_produk;?></b> produk</p>
					<div class="row">
						<?php
						while($row = mysqli_fetch_array($produk, MYSQLI_ASSOC)) {
							echo "<a href='product_detail.php?id_produk={$row['id_produk']}'
								     class='col-4 py-3 text-black text-decoration-none position-relative'>
								      <img src='img/{$row['gambar']}'
								           class='w-100 rounded-3' style='height: 300px;'>
									  <h5 class='mt-2 mb-1'>{$row['nama_produk']}</h5>
									  <h6>Rp {$row['harga_produk']};</h6>
								  </a>";
						}
						?>
						
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