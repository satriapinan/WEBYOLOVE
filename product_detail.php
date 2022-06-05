<?php

session_start();

include("config.php");

if ((!empty($_GET['id_produk'])) || (isset($_SESSION['produk_pilihan']))) {
	if (!empty($_GET['id_produk'])) {
		$_SESSION['produk_pilihan'] = $_GET['id_produk'];
	}
	$id = $_SESSION['produk_pilihan'];

	$query = "SELECT * FROM produk WHERE id_produk=$id";
	$produk = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($produk, MYSQLI_ASSOC);

	$query = "SELECT * FROM detail_produk WHERE id_produk=$id";
	$detail_produk = mysqli_query($conn, $query);
	$detail_produk2 = mysqli_query($conn, $query);
}

if (isset($_POST['submitOrder'])) {
	if (isset($_SESSION['username'])) {
		$jumlah  = $_POST['amount'];
		$note  = $_POST['note'];
		$username = $_SESSION['username'];
		$produk_pilihan = $_SESSION['produk_pilihan'];
		$detail_pilihan = $_POST['selectedDetail'];

		$query = "SELECT * FROM detail_produk WHERE id_detail_produk=$detail_pilihan";
		$result = mysqli_query($conn, $query);
		$detail_produk_pilihan = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		$harga = ($row['harga_produk'] + $detail_produk_pilihan['harga_detail']) * $jumlah;
		
		$query = "INSERT INTO pesanan (id_pesanan, jumlah_produk, total_harga, catatan_pesanan, username, id_produk, id_detail_produk) VALUES ('', '$jumlah', '$harga', '$note', '$username', '$produk_pilihan', '$detail_pilihan')";
		$result = mysqli_query($conn, $query);

		header("location: pembayaran.php");
	} else {
		$_SESSION['error'] = "login first";
		header("location: login.php");
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
		
		<title>Detail Produk</title>
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
		$header = 0;
		include "navbar.php";
		?>

		<main class="container-sm container-md container-lg container-xl container-xxl">
			<div class="row">
				<div class="col-6">
					<div id="carouselProductDetail" class="carousel slide" data-bs-ride="true">
						<div class="carousel-inner">
							<?php
								$i = 0;
								while($row2 = mysqli_fetch_array($detail_produk, MYSQLI_ASSOC)) {
									if ($i==0) {
										echo "<div class='carousel-item active'>";
									} else {
										echo "<div class='carousel-item'>";
									}
									echo "<img src='img/{$row2['gambar']}' class='d-block w-100 rounded' alt='...' style='height: 500px;'> </div>";
									$i++;
								}
							?>
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
					<h2 class="text-secondary"><?php echo "{$row['nama_produk']}"; ?></h2>
					<h5>Rp <?php echo "{$row['harga_produk']}"; ?>;</h5>
					<form action="product_detail.php" method="POST">
						<div class="form-floating mb-3">
							<?php
							echo "<input readonly class='form-control-plaintext' id='description' placeholder='Deskripsi barang' value='{$row['deskripsi_produk']}'>";
							?>
							<label for="description">Deskripsi Barang</label>
						</div>
						<div class="form-floating mb-3">
							<select name="selectedDetail" class="form-select" id="selectDetail" aria-label="selectDetail">
								<option selected>Pilih detail yang diinginkan..</option>
								<?php
								while($row3 = mysqli_fetch_array($detail_produk2, MYSQLI_ASSOC)) {
									echo "<option value='{$row3['id_detail_produk']}'>{$row3['nama_detail']}</option>";

								}
								?>
							</select>
							<label for="selectDetail">Detail Pilihan</label>
						</div>
						<div class="form-floating mb-3">
							<textarea name="note" class="form-control" placeholder="Tolong barangnya.." id="note" style="height: 100px"></textarea>
							<label class="fw-semibold"for="note">Catatan</label>
						</div>
						<div class="form-floating mb-3">
							<input name="amount" min="1" type="number" class="form-control" id="amount" placeholder="Banyak barang.." value="1" style="width: 90px;">
							<label for="floatingInput">Jumlah</label>
						</div>
						<button name="submitOrder" type="submit" class="btn btn-primary w-15">Beli</button>
					</form>
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