<center>
	<h2 style="margin-bottom: 40px">Data Karyawan</h2>
	<div>
		<table class="table table-bordered table-striped">
			<thead style="background-color: #999C9F">
				<tr style="text-align: center; color: white;font-weight: bold;">
					<td scope="col">No</td>
					<td scope="col">Nama</td>
					<td scope="col">Username</td>
					<td scope="col">Password</td>
					<td scope="col">Alamat</td>
					<td scope="col" colspan="2">Opsi</td>
				</tr>
			</thead>
			<tbody>
				<?php $data=$karyawan->ambil_karyawan() ?>
				<?php foreach ($data as $key => $value): ?>
					<tr style="text-align: center">
						<td><?php echo $value['id_karyawan']; ?></td>
						<td><?php echo $value['nama']; ?></td>
						<td><?php echo $value['username']; ?></td>
						<td><?php echo $value['password']; ?></td>
						<td><?php echo $value['alamat']; ?></td>
						<td><a href="index.php?halaman=ubah_karyawan&id=<?php echo $value['id_karyawan'];?>" class="btn btn-success btn-sm" style="color: black;" >Ubah</a></td>
						<td><a href="index.php?halaman=hapus_karyawan&id=<?php echo $value['id_karyawan'];?>" class="btn btn-danger btn-sm" style="color: black">Hapus</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<!-- Tambah Karyawan -->
		<div class="col-md-5">
		<button style="margin-left: 615px;margin-bottom: 30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah">Tambah Karyawan</button>
		</div>
		<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ModalTitle">Pengisian Data Siswa</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="insert_form">
						<form method="post">
							<div class="form-group">
								<input class="form-control" type="text" id="naama" name="nama" placeholder="nama" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" id="usr" name="usr" placeholder="userame" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="text"	id="pass" name="pass" placeholder="password" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" id="alamat" name="alamat" placeholder="alamat" required="">
							</div>
							<div class="form-group">
								<input type="submit" name="tambah" id="tambah" value="Tambah" class="btn btn-primary btn-block" />
								<?php 
								if(isset($_POST['tambah']))
								{
									$karyawan->tambah_karyawan($_POST['nama'],$_POST['usr'],$_POST['pass'],$_POST['alamat']);
									echo "<script>alert('Data berhasil disimpan');</script>";
									echo "<script>location='index.php?halaman=karyawan';</script>";
								}
								?>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
	</center>