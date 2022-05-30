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
					<?php
					if ($nav1 == 1) {
						echo "<li class='nav-item me-2'>
								<a class='nav-link active fw-semibold' href='index.php'>Beranda</a>
							  </li>";
					}else if ($nav1 == 0) {
						echo "<li class='nav-item me-2'>
								<a class='nav-link' href='index.php'>Beranda</a>
							  </li>";
					}
					if ($nav2 == 1) {
						echo "<li class='nav-item me-2'>
								<a class='nav-link active fw-semibold' href='product.php'>Produk</a>
							  </li>";
					}else if ($nav2 == 0) {
						echo "<li class='nav-item me-2'>
								<a class='nav-link' href='product.php'>Produk</a>
							  </li>";
					}
					if ($nav3 == 1) {
						echo "<li class='nav-item me-2'>
								<a class='nav-link active fw-semibold' href='about.php'>Tentang</a>
							  </li>";
					}else if ($nav3 == 0) {
						echo "<li class='nav-item me-2'>
								<a class='nav-link' href='about.php'>Tentang</a>
							  </li>";
					}
					?>
				</ul>
				<form class="w-100 me-4 mb-3 mb-lg-0">
					<div class="input-group">
						<button name="submitSearch" type="submit" class="input-group-text text-black-50" id="search">
						<i class="fa fa-search"></i>
						</button>
						<input name="search" class="form-control" type="search" placeholder="Cari produk yang kamu inginkan.." aria-label="Search" aria-describedby="search">
					</div>
				</form>
				<div class="d-flex">
					<a href="login.php" class="btn btn-outline-light me-2">Masuk</a>
					<a href="registrasi.php" class="btn btn-light">Daftar</a>
				</div>
			</div>
		</div>
	</nav>
	<?php
	if ($header == 1) {
		echo "<div class='container-sm container-md container-lg container-xl container-xxl bg-primary py-3'>
				<h3 class='text-secondary'>Cari Produk Mu!</h3>
				<p>Temukan bouquet dan case kesukaan mu disini!</p>
			  </div>";
	}
	?>
</header>