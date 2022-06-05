<?php

session_start();

include("config.php");

$username = $_SESSION['username'];

$query = "SELECT * FROM jenis_transaksi";
$jenis_transaksi = mysqli_query($conn, $query);

$id_pesanan = $_SESSION['id_pesanan']; 

$query = "SELECT * FROM pesanan WHERE username='$username' AND id_pesanan='$id_pesanan'";
$result = mysqli_query($conn, $query);
$pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

$id_produk_pesanan = $pesanan['id_produk'];

$query = "SELECT * FROM produk WHERE id_produk='$id_produk_pesanan'";
$result = mysqli_query($conn, $query);
$produk_pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

$id_ekspedisi_pesanan = $pesanan['id_ekspedisi'];

$query = "SELECT * FROM ekspedisi WHERE id_ekspedisi='$id_ekspedisi_pesanan'";
$result = mysqli_query($conn, $query);
$ekspedisi_pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

$id_detail_pesanan = $pesanan['id_detail_produk'];

$query = "SELECT * FROM detail_produk WHERE id_detail_produk='$id_detail_pesanan'";
$result = mysqli_query($conn, $query);
$detail_pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(isset($_POST['submitMetBayar']))
{
    $id_metBayar = $_POST['metBayar'];

    $query = "INSERT INTO transaksi (id_transaksi, id_jenis_transaksi, username)
              VALUES ('', '$id_metBayar', '$username')";
    mysqli_query($conn, $query);

	$query = "SELECT MAX(id_transaksi) FROM transaksi WHERE username='$username'";
	$result = mysqli_query($conn, $query);
	$id_max = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$id_transaksi = $id_max['MAX(id_transaksi)'];

    $query = "UPDATE pesanan SET id_transaksi='$id_transaksi' WHERE id_pesanan='$id_pesanan'";
    mysqli_query($conn, $query);

    header("Location: status_pesanan.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Menyelesaikan Pemesanan - Metode Pembayaran</title>
		
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
				<div class="atas mb-4">
					<h3 class="satu">Menyelesaikan Pemesanan</h3>
					<small><h6 class="dua text-primary">Alamat</h6></small>
					<hr class="tiga">
					<small><h6 class="empat text-primary">Pengiriman</h6></small>
					<hr class="lima">
					<small><h6 class="enam text-secondary">Pembayaran</h6></small>
				</div>
				<div class="row">
					<form action="pembayaran3.php" method="POST" class="col-6">
						<?php
    					while($metodeBayar = mysqli_fetch_array($jenis_transaksi, MYSQLI_ASSOC)) {
    						echo "<div class='form-check mb-3 px-5 py-3 rounded col-8'
    						      style='background-color: #FFFAFA;'>
									<input name='metBayar' class='form-check-input' type='radio' value='{$metodeBayar['id_jenis_transaksi']}'>
									<label class='form-check-label text-secondary fw-semibold'>
										{$metodeBayar['jenis_pembayaran']}
									</label>
								  </div>";
						}
						?>
						<div class="col-8">
							<button name="submitMetBayar" class="w-100 btn btn-lg btn-primary" type="submit">Selesaikan Pesanan</button>
						</div>
					</form>
					<div class="col-6">
						<div class="card mb-3" style="max-width: 540px;">
							<div class="row g-0">
								<div class="col-md-4">
									<div class="w-100 h-100" style="max-width: 200px; min-height: 180px; max-height: 180px;">
										<?php
										echo "<img src='img/{$produk_pesanan['gambar']}'
										      class='w-100 h-100 rounded' alt='gambar pesanan'>";
										?>
									</div>
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<?php
										$sub_harga = $produk_pesanan['harga_produk'] * $pesanan['jumlah_produk'];
										echo "<h4 class='card-title mb-1'>
											      {$produk_pesanan['nama_produk']}
											  </h4>
											  <p class='card-text mb-0'><small class='text-muted'>
											      Harga: Rp {$produk_pesanan['harga_produk']};
											  </small></p>
											  <p class='card-text mb-0'><small class='text-muted'>
											      Detail: Rp {$detail_pesanan['harga_detail']};
											  </small></p>
											  <p class='card-text mb-4'><small class='text-muted'>
											      Jumlah: {$pesanan['jumlah_produk']}
											  </small></p>
											  <p class='card-text mb-0'><small class='text-muted'>Harga Barang:</small></p>
											  <h5>Rp ".$sub_harga.";</h5>";
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between mb-2">
							<span>Subtotal</span>
							<?php
							echo "<span class='fw-semibold'>Rp ".$sub_harga.";</span>";
							?>
						</div>
						<div class="d-flex justify-content-between">
							<span>Biaya pengiriman</span>
							<?php
							echo "<span class='fw-semibold'>Rp {$ekspedisi_pesanan['harga_ekspedisi']};</span>";
							?>
						</div>
						<span style="background: #d4d9df; width: 100%; height: 2px; display: inline-block"></span>
						<div class="d-flex justify-content-between mt-2">
							<span>Total</span>
							<?php
							echo "<span class='fw-semibold'>Rp {$pesanan['total_harga']};</span>"
							?>
						</div>
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