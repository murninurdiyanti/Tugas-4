<?php 
session_start();
$con = new mysqli("localhost","root","","datakaryawan");

class admin{

	public $koneksi;

	function __construct($con){
		$this->koneksi = $con;
	}

	function ambil_user()
	{
		$ambil=$this->koneksi->query("SELECT*FROM user");

		while ($pecah = $ambil->fetch_assoc()) {
			$data[] = $pecah;
		}
		return $data;
	}

	function login_admin($usr,$pass)
	{
		$ps = sha1($pass);
		$ambil=$this->koneksi->query("select*from user where username='$usr' and password='$ps' ");
		$cocok=$ambil->num_rows;

		if($cocok==1){
			$akun=$ambil->fetch_assoc();
			$_SESSION['admin'] = $akun;
			return "sukses";
		}
		else{
			return "gagal";
		}
	}
}


class karyawan{

	public $koneksi;

	function __construct($con){
		$this->koneksi = $con;
	}

	function ambil_karyawan()
	{
		$ambil=$this->koneksi->query("SELECT*FROM karyawan");

		while ($pecah = $ambil->fetch_assoc()) {
			$data[] = $pecah;
		}
		return $data;
	}

	function tambah_karyawan($nama,$user,$pass,$alamat)
	{
		$this->koneksi->query("INSERT INTO karyawan(nama,username,password,alamat) VALUES ('$nama','$user','$password','$alamat')");
	}

	function ambilsatu_karyawan($id_karyawan)
	{
		$ambil=$this->koneksi->query("SELECT*FROM karyawan WHERE id_karyawan=$id_karyawan");
		$pecah=$ambil->fetch_assoc();
		return $pecah;
	}

	function hapus_karyawan($id_karyawan)
	{
		$data_lama = $this->ambilsatu_karyawan($id_karyawan);
		$this->koneksi->query("DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");

	}

	function ubah_karyawan($nama,$user,$pass,$alamat,$id_karyawan)
	{
		$data_lama = $this->ambilsatu_karyawan($id_karyawan);
		$this->koneksi->query("UPDATE karyawan SET nama='$nama',username='$user',password='$pass',alamat='$alamat' WHERE id_karyawan='$id_karyawan'") or die(mysqli_error($this->koneksi));
	}
}

$karyawan = new karyawan($con);
$admin = new admin($con);

?>