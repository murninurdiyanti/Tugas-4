<center><h3 style="margin-bottom: 20px">Ubah Data Karyawan</h3>
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6" style="background-color:#E4E4E4 ;border-radius: 10px">
				<?php $data_karyawan=$karyawan->ambilsatu_karyawan($_GET['id']); ?>
				<form method="post" style="width: auto; padding: 30px">
					<div class="form-group">
						<label style="float: left; font-weight: bold; font-family: Arial" >Nama</label>
						<input class="form-control" type="text" id="nama" name="nama" placeholder="Nama" required="" value="<?php echo $data_karyawan['nama'] ?>">
					</div>
					<div class="form-group" style="font-weight: bold;">
						<label style="float: left">Username</label>
						<input class="form-control" type="text"	id="usr" name="usr" placeholder="Username" required="" value="<?php echo $data_karyawan['username'] ?>">
					</div>
					<div class="form-group" style="font-weight: bold;">
						<label style="float: left">Password</label>
						<input class="form-control" type="text" id="pass" name="pass" placeholder="Password" required="" value="<?php echo $data_karyawan['password'] ?>">
					</div>
					<div class="form-group" style="font-weight: bold;">
						<label style="float: left">Alamat</label>
						<input class="form-control" type="text" id="alamat" name="alamat" placeholder="Alamat" required="" value="<?php echo $data_karyawan['alamat'] ?>">
					</div>
					<div class="col-md-5">
						<button name="simpan" class="btn btn-success btn-block" style="margin-top:40px; background-color: #2C3E50; border-color: #2C3E50; margin-left: 150px">Simpan</button>
					</div>
				</form>
				<?php 
				if(isset($_POST['simpan'])){
					$karyawan->ubah_karyawan($_POST['nama'],$_POST['usr'],$_POST['pass'],$_POST['alamat'],$_GET['id']);
					echo "<script>alert('Data Berhasil Ubah'); location='index.php?halaman=karyawan';</script>";
				}
				?>
			</div>
		</div>
	</div>
</center>