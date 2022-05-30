<?php

session_start();

include("config.php");

$username = $_SESSION['username'];

$query = "SELECT * FROM customer WHERE username='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(isset($_POST['edit_biodata'])) {
	$file_tmp = $_FILES['userImg']['tmp_name'];
    $file_name = $_FILES['userImg']['name'];
    $file_size = $_FILES['userImg']['size'];
    $file_type = $_FILES['userImg']['type'];
    
    if($file_name) {
        if ($file_size < 1000000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $dir = "img/$file_name";
            move_uploaded_file($file_tmp, $dir);
        }
    }

	$username = $_POST['username'];
	$nama = $_POST['name'];
	$email = $_POST['email'];	
	$gender = $_POST['gender'];	
	$tl = $_POST['tl'];

	$query = "UPDATE customer SET nama_customer='$nama', email_customer='$email', gender_customer='$gender', tl_customer='$tl', gambar_customer='$file_name' WHERE username='$username'";
	mysqli_query($conn, $query);
	header("location: profile.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadata -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Profil</title>
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
		<main class="container-sm container-md container-lg container-xl container-xxl">
			<h3 class="text-secondary">Biodata Diri</h3>
			<form action="profile.php" method="POST" class="row justify-content-between"
			enctype="multipart/form-data">
				<div class="col-6">
					<h6>Lengkapi Biodata</h6>
					<?php
					echo "<div class='row mb-3'>
							<label for='username' class='col-sm-3 col-form-label'>Username</label>
							<div class='col-sm-9'>
								<input name='username' type='text' class='form-control' id='username'
								value='{$row['username']}' readonly>
							</div>
						  </div>
						  <div class='row mb-3'>
							<label for='name' class='col-sm-3 col-form-label'>Nama</label>
							<div class='col-sm-9'>
								<input name='name' type='text' class='form-control' id='name'
								value='{$row['nama_customer']}' required>
							</div>
						  </div>
						  <div class='row mb-3'>
							<label for='email' class='col-sm-3 col-form-label'>Email</label>
							<div class='col-sm-9'>
								<input name='email' type='email' class='form-control' id='email'
								value='{$row['email_customer']}' required>
							</div>
						  </div>";
					?>
						  <div class='row mb-3 align-items-center'>
							<label for='inputGender' class='col-sm-3 col-form-label'>Jenis Kelamin</label>
							<div class='col-sm-9' id='inputGender'>
								<div class='form-check form-check-inline'>
									<input class='form-check-input' type='radio' name='gender' id='gender1'
									value='Laki-laki'
									<?php if($row['gender_customer']=="Laki-laki"){echo "checked";} ?>>
									<label class='form-check-label' for='gender1'>Laki-laki</label>
								</div>
								<div class='form-check form-check-inline'>
									<input class='form-check-input' type='radio' name='gender' id='gender2'
									value='Perempuan'
									<?php if($row['gender_customer']=="Perempuan"){echo "checked";} ?>>
									<label class='form-check-label' for='gender2'>Perempuan</label>
								</div>
							</div>
						  </div>
					<?php
					echo "<div class='row mb-3'>
							<label for='tl' class='col-sm-3 col-form-label'>Tanggal Lahir</label>
							<div class='col-sm-9'>
								<input name='tl' type='date' class='form-control' id='tl'
								value='{$row['tl_customer']}'>
							</div>
						  </div>
						  <div class='row mb-5'>
						  </div>";
					?>
					<button name="edit_biodata" type="submit" class="btn btn-primary">Edit Biodata</button>
					<a class="btn btn-secondary" href="profile_edit.php">Tambah Alamat</a>
				</div>
				<div class="col-5">
					<div class="card w-100 text-center border rounded py-4">
						<div>
							<?php
							echo "<img src='img/{$row['gambar_customer']}'
								   class='img-fluid w-50 rounded-circle' alt='User Photo'>";
							?>
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-center">
								<div class="mb-2 mt-3 w-25">
									<input name="userImg" class="form-control" type="file" id="userImg">
								</div>
							</div>
							<p class="card-text mb-0 text-muted">ukuran gambar: maks 1mb</p>
							<p class="card-text text text-muted">format gambar: JPEG, PNG</p>
						</div>
					</div>
				</div>
			</form>
		</main>
		
		<!-- Script JS for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>