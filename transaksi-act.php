<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$no_transaksi = rand();
$anggota = $_POST['anggota'];
$buku = $_POST['buku'];
$tanggal = $_POST['tanggal'];

include 'koneksi.php';

$query = "INSERT INTO transaksi (no_transaksi, anggota, buku, tanggal)
            VALUES ('$no_transaksi','$anggota', '$buku', '$tanggal')";
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
if ($result) {
    header('Location: transaksi.php');
}