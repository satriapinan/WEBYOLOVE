<?php

session_start();

include("config.php");

$username = $_SESSION['username'];

$query = "SELECT * FROM detail_pengiriman WHERE username='$username'";
$alamat_simpan = mysqli_query($conn, $query);

if(isset($_POST['pengiriman']))
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
    mysqli_close($conn);

    header("Location: profile_edit.php");
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
    mysqli_close($conn);

    header("Location: profile_edit.php");
}

if(!empty($_GET['alamat_edit'])) {
	$id_edit_alamat = $_GET['alamat_edit'];
	
	$query = "SELECT * FROM detail_pengiriman WHERE id_detail_pengiriman='$id_edit_alamat'";
	$detail_edit_alamat = mysqli_query($conn, $query);
	$data_edit_alamat = mysqli_fetch_array($detail_edit_alamat, MYSQLI_ASSOC);
}

if(!empty($_GET['hapus_alamat'])) {
	$id_hapus_alamat = $_GET['hapus_alamat'];
	
    $query = "DELETE FROM detail_pengiriman WHERE id_detail_pengiriman='$id_hapus_alamat'";
	mysqli_query($conn, $query);

    header("Location: profile_edit.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Profil - Tambah Alamat</title>
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
		$nav2 = 0;
		$nav3 = 0;
		$header = 0;
		include "navbar.php";
		?>
		<main class="container-sm container-md container-lg container-xl container-xxl pb-5">
			<div class="row justify-content-between">
				<div class="col-6">
					<?php
						if(!empty($_GET['alamat_edit']))
						{echo "<h3 class='text-secondary'>Edit Alamat</h3>";}
						else{echo "<h3 class='text-secondary'>Tambah Alamat</h3>";}
					?>
					
					<form action="profile_edit.php" method="POST">
						<input name="id_alamat" type="hidden" class="form-control"
						<?php 
							if(!empty($_GET['alamat_edit']))
							{echo "value='{$data_edit_alamat['id_detail_pengiriman']}'";}
						?>>
						<div class="form-floating mb-3">
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
						<div class="row">
							<div class="col">
								<?php
									if(!empty($_GET['alamat_edit'])){
										echo "<button name='edit_pengiriman' class='w-100 btn btn-primary' type='submit'>Edit</button>";
									} else {
										echo "<button name='pengiriman' class='w-100 btn btn-primary' type='submit'>Tambah</button>";
									}
									
								?>
							</div>
							<?php
								if(!empty($_GET['alamat_edit'])){
									echo "<div class='col'>";
									echo "<a href='profile_edit.php?hapus_alamat={$data_edit_alamat['id_detail_pengiriman']}' class='w-100 btn btn-secondary'>Hapus</a>";
									echo "</div>";
								}
							?>
						</div>
						
					</form>
				</div>
				<div class="col-5">
					<h3 class="text-secondary mb-3">Alamat yang Tersimpan</h3>
					<?php
    					while($row = mysqli_fetch_array($alamat_simpan, MYSQLI_ASSOC)) {
    						echo "<a href='profile_edit.php?alamat_edit={$row['id_detail_pengiriman']}'
    						       class='rounded btn "; 
    						       if($_GET['alamat_edit']==$row['id_detail_pengiriman'])
    						       {echo "btn-secondary";}
    						       else{echo "btn-outline-secondary";} echo " text-start w-100 mb-3'>
									<div class='d-flex justify-content-between align-items-center'>
										<div>
											<h5 class='mb-0'>{$row['nama_penerima']}</h5>
											<p class='fw-light mb-0'>{$row['alamat']}</p>
										</div>
										<div>
											<i class='fa fa-pencil-square-o fs-4'></i>
										</div>
									</div>
								  </a>";
						}
					?>
				</div>
			</div>
		</main>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>