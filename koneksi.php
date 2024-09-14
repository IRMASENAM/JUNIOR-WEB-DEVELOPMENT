<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "vsga_simperpus_pnc";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi) {
    echo 'gagal terhubung ke database';
} else {
    //echo 'berhasil terhubung ke database';
}
?>