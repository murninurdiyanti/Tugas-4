<?php include '../config/class.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/bootbox.min.js"></script>
	<link rel="icon" href="../assets/image/1b.png">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><span class="navbar-brand mb-0 h1" style="padding-left: 5px;margin-top: -50px">Dashboard</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" style="margin-top: 60px; margin-left:-140px " id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?halaman=karyawan">Karyawan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?halaman=barang">Barang</a>
				</li>
			</ul>
		</div>
	</nav>
	<div>
		<div class="container" style="padding-top: 30px;">
			<?php 
			if (!isset($_GET['halaman'])) {
				include 'home.php';
			}
			else{
				if ($_GET['halaman']=="karyawan") {
					include 'karyawan/karyawan.php';
				}
				elseif ($_GET['halaman']=="hapus_karyawan") {
					include 'karyawan/hapus_karyawan.php';
				}
				elseif($_GET['halaman']=="ubah_karyawan"){
					include 'karyawan/ubah_karyawan.php';
				}
				elseif ($_GET['halaman']=="barang") {
					include 'barang/barang.php';
				}
				
			}
			?>
		</div>
	</div>
</body>
</html>