<?php

session_start();

include("config.php");

$username = $_SESSION['username'];

$query = "SELECT * FROM detail_pengiriman WHERE username='$username'";
$alamat_simpan = mysqli_query($conn, $query);

$query = "SELECT MAX(id_pesanan) FROM pesanan WHERE username='$username'";
$result = mysqli_query($conn, $query);
$id_max = mysqli_fetch_array($result, MYSQLI_ASSOC);
$id_pesanan =  $id_max['MAX(id_pesanan)'];
$_SESSION['id_pesanan'] = $id_max['MAX(id_pesanan)']; 

$query = "SELECT * FROM pesanan WHERE username='$username' AND id_pesanan='$id_pesanan'";
$result = mysqli_query($conn, $query);
$pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

$id_produk_pesanan = $pesanan['id_produk'];
$query = "SELECT * FROM produk WHERE id_produk='$id_produk_pesanan'";
$result = mysqli_query($conn, $query);
$produk_pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

$id_detail_pesanan = $pesanan['id_detail_produk'];
$query = "SELECT * FROM detail_produk WHERE id_detail_produk='$id_detail_pesanan'";
$result = mysqli_query($conn, $query);
$detail_pesanan = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(isset($_POST['detailPengiriman'])) 
{
    $penerima = $_POST['penerima'];
    $alamat = $_POST['alamat'];
    $tel = $_POST['tel'];
    $kecamatan = $_POST['kecamatan'];
    $kotakab = $_POST['kotakab'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kodepos'];
    $tambahan = $_POST['tambahan'];

    $query = "INSERT INTO detail_pengiriman VALUES ('', '$penerima', '$tel', '$alamat', '$kecamatan', '$kotakab', '$provinsi', '$kode_pos', '$tambahan', '$username')";
    mysqli_query($conn, $query);

    $query = "SELECT MAX(id_detail_pengiriman) FROM detail_pengiriman WHERE username='$username'";
	$result = mysqli_query($conn, $query);
	$id_pengiriman_max = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$id_pengiriman =  $id_pengiriman_max['MAX(id_detail_pengiriman)'];

	$query = "UPDATE pesanan SET id_detail_pengiriman='$id_pengiriman' WHERE id_pesanan='$id_pesanan'";
    mysqli_query($conn, $query);

    header("Location: pembayaran2.php");
}

if(isset($_POST['edit_pengiriman']))
{
    $id = $_POST['id_alamat'];
    $penerima = $_POST['penerima'];
    $alamat = $_POST['alamat'];
    $tel = $_POST['tel'];
    $kecamatan = $_POST['kecamatan'];
    $kotakab = $_POST['kotakab'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kodepos'];
    $tambahan = $_POST['tambahan'];

	$query = "UPDATE detail_pengiriman SET nama_penerima='$penerima', alamat='$alamat', no_telp='$tel', kecamatan='$kecamatan', kota='$kotakab', provinsi='$provinsi', kode_pos='$kode_pos', tambahan='$tambahan' WHERE id_detail_pengiriman='$id'";
    mysqli_query($conn, $query);

    $query = "UPDATE pesanan SET id_detail_pengiriman='$id' WHERE id_pesanan='$id_pesanan'";
    mysqli_query($conn, $query);

    header("Location: pembayaran2.php");
}

if(!empty($_GET['alamat_edit'])) {
	$id_edit_alamat = $_GET['alamat_edit'];
	
	$query = "SELECT * FROM detail_pengiriman WHERE id_detail_pengiriman='$id_edit_alamat'";
	$detail_edit_alamat = mysqli_query($conn, $query);
	$data_edit_alamat = mysqli_fetch_array($detail_edit_alamat, MYSQLI_ASSOC);
}

?>


<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Menyelesaikan Pemesanan - Detail Pengiriman</title>
		
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
				<div class="atas">
					<h3 class="satu">Menyelesaikan Pemesanan</h3>
					<small><h6 class="dua text-secondary">Alamat</h6></small>
					<hr class="tiga">
					<small><h6 class="empat text-primary">Pengiriman</h6></small>
					<hr class="lima">
					<small><h6 class="enam text-primary">Pembayaran</h6></small>
				</div>
				<div class="row justify-content-between">
					<form action="pembayaran.php" method="POST" class="col-6">
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="mt-4 mb-3">Alamat Tujuan</h5>
							<div class="dropdown mt-4 mb-3">
								<a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									Alamat Tersimpan
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<?php
    								while($alamatTersimpan = mysqli_fetch_array($alamat_simpan, MYSQLI_ASSOC)) {
									
									echo "<li><a class='dropdown-item text-black text-decoration-none'
									href='pembayaran.php?alamat_edit={$alamatTersimpan['id_detail_pengiriman']}'>
											<p class='mb-0'>{$alamatTersimpan['nama_penerima']}</p>
											<span class='text-muted'>{$alamatTersimpan['alamat']}</span>
										  </a></li>";
									}
									?>
								</ul>
							</div>
						</div>
						<div class="form-floating mb-3">
							<input name="id_alamat" type="hidden" class="form-control"
							<?php 
								if(!empty($_GET['alamat_edit']))
								{echo "value='{$data_edit_alamat['id_detail_pengiriman']}'";}
							?>>
							<input name="penerima" type="text" class="form-control" id="nama"
							<?php 
								if(!empty($_GET['alamat_edit']))
								{echo "value='{$data_edit_alamat['nama_penerima']}'";}
							?> required>
							<label for="namadepan">Nama penerima</label>
						</div>
						<div class="form-floating mb-3">
							<input name="alamat" type="text" class="form-control" id="alamat"
							<?php 
								if(!empty($_GET['alamat_edit']))
								{echo "value='{$data_edit_alamat['alamat']}'";}
							?> required>
							<label for="alamat">Alamat</label>
						</div>
						<div class="form-floating mb-3">
							<input name="tel" type="tel" class="form-control" id="tel"
							<?php 
								if(!empty($_GET['alamat_edit']))
								{echo "value='{$data_edit_alamat['no_telp']}'";}
							?> required>
							<label for="tel">No. Telepon</label>
						</div>
						<div class="row">
							<div class="form-floating col-6 mb-3">
								<input name="kecamatan" type="text" class="form-control" id="kecamatan"
								<?php 
									if(!empty($_GET['alamat_edit']))
									{echo "value='{$data_edit_alamat['kecamatan']}'";}
								?> required>
								<label for="kecamatan" class="ms-3">Kecamatan</label>
							</div>
							<div class="form-floating col-6 mb-3">
								<input name="kotakab" type="text" class="form-control" id="kotakab"
								<?php 
									if(!empty($_GET['alamat_edit']))
									{echo "value='{$data_edit_alamat['kota']}'";}
								?> required>
								<label for="kotakab" class="ms-3">Kota/Kabupaten</label>
							</div>
						</div>
						<div class="row">
							<div class="form-floating col-6 mb-3">
								<input name="provinsi" type="text" class="form-control" id="provinsi"
								<?php 
									if(!empty($_GET['alamat_edit']))
									{echo "value='{$data_edit_alamat['provinsi']}'";}
								?> required>
								<label for="provinsi" class="ms-3">Provinsi</label>
							</div>
							<div class="form-floating col-6 mb-3">
								<input name="kodepos" type="text" class="form-control" id="kodepos"
								<?php 
									if(!empty($_GET['alamat_edit']))
									{echo "value='{$data_edit_alamat['kode_pos']}'";}
								?> required>
								<label for="kodepos" class="ms-3">Kode Pos</label>
							</div>
						</div>
						<div class="form-floating mb-3">
							<input name="tambahan"type="text" class="form-control" id="tambahan"
							<?php 
								if(!empty($_GET['alamat_edit']))
								{echo "value='{$data_edit_alamat['tambahan']}'";}
							?>>
							<label for="tambahan">Tambahan</label>
						</div>
						<?php
						if(!empty($_GET['alamat_edit'])) {
							echo "<button name='edit_pengiriman'
							       class='w-100 btn btn-lg btn-primary' type='submit'>
									Simpan Detail Pengiriman
								  </button>";
						} else {
							echo "<button name='detailPengiriman'
							       class='w-100 btn btn-lg btn-primary' type='submit'>
									Simpan Detail Pengiriman
								  </button>";
						}
						?>
					</form>
					<div class="col-5">
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
											  <h5>Rp {$pesanan['total_harga']};</h5>";
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between mb-2">
							<span>Subtotal</span>
							<?php
							echo "<span class='fw-semibold'>Rp {$pesanan['total_harga']};</span>";
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