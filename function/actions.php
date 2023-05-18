<?php
include_once('database.php');
$mysqli = new Database();
$aksi = $_GET['aksi'];

if($aksi=='tambah_tamu'){
    $nama = $_POST['nama'];
    $handphone = $_POST['handphone'];
    $alamat = $_POST['alamat'];

    foreach($mysqli->tambah_tamu($nama,$handphone,$alamat) as $query);

    if($query['status'] == 'success'){
        echo "success";
    }else if($query['status'] == 'exist'){
        echo "exist";
    }else{
        echo "failed";
    }
}else if($aksi=='login'){
    $username = $_POST['username'];
    $password = $_POST['password']; 
    //Memeriksa username dan password
    foreach($mysqli->login($username,$password)as $d);
    $cek=$d['jumlah'];
    if($cek>0){
        echo 'berhasil';
        //Mengambil ID user admin untuk membuat sesi user_id
        foreach($mysqli->user($username)as $x);
        $id = $x['id'];  
        session_start();
        $_SESSION['user_id'] = $id ;
    }else{
        echo 'gagal';
    }
}
?>