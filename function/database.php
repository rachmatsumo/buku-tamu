<?php
include("koneksi.php"); 
date_default_timezone_set('Asia/Jakarta'); 
class Database{
    public function __construct(){
		$db = new DatabaseConnection;
		$this->conn = $db->conn;
	}
    public function login($username,$password){
		$hasil = $this->conn->query("SELECT count(*)as jumlah from admin where username='$username' and password='$password'");
		while ($d = mysqli_fetch_array($hasil)){
			$result[] = $d;
		}
		return $result;
	}
    public function user($username){
		$hasil = $this->conn->query("SELECT * from admin where username='$username'");
		while ($d = mysqli_fetch_array($hasil)){
			$result[] = $d;
		}
		return $result;
	}
	
    public function tambah_tamu($nama, $handphone, $alamat){
		$tgl = date('Y-m-d');
		//Memeriksa tamu dengan no handphone dan tanggal apakah data exist
		$cek = $this->conn->query("SELECT count(*) as jumlah from daftar_tamu where hp='$handphone' and substring(tanggal,1,10)='$tgl'");
		$d = mysqli_fetch_assoc($cek);
		if($d['jumlah'] > 0){
			$result[] = array('status' => 'exist');
		}else{ 
			$query = $this->conn->query("INSERT INTO daftar_tamu(nama,hp,alamat,tanggal)VALUES('$nama', '$handphone', '$alamat', now())");
			if ($query= true){
				$result[] = array('status' => 'success');
			}else{
				$result[] = array('status' => 'gagal');
			}
		}
		return $result;
	}
	public function daftar_tamu(){
		$hasil = $this->conn->query("SELECT * from daftar_tamu");
		$cek = mysqli_num_rows($hasil); 
		if($cek > 0){
			while ($d=mysqli_fetch_assoc($hasil)){
				$result[] = $d;
			}
		}else{
			$result[] = null;
		}
		return $result;
	}
	public function daftar_tamu_g_tanggal(){
		$hasil = $this->conn->query("SELECT substring(tanggal,1,10)as tanggal, count(*)as data from daftar_tamu group by substring(tanggal, 1,10) order by tanggal asc limit 7");
		$cek = mysqli_num_rows($hasil); 
		if($cek > 0){
			while ($d=mysqli_fetch_assoc($hasil)){
				$result[] = $d;
			}
		}else{
			$result[] = null;
		}
		return $result;
	}

}
?>
