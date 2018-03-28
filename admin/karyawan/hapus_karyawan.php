<?php 
$karyawan->hapus_karyawan($_GET['id']);
echo "<script>alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=karyawan';</script>";
?>