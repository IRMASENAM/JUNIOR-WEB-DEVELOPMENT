<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];

include 'koneksi.php';
/**
 * ini adalah query untuk hapus data
 */
if (@$_GET['id']) {
    $id = $_GET['id'];

    $query = "DELETE FROM anggota WHERE id_anggota = '$id'";
} 
/**
 * ini adalah query untuk ubah data
 */
else if (@$_POST['id_anggota']) {
    $id = $_POST['id_anggota'];
    
    $query = "UPDATE anggota SET
                nama = '$nama',
                alamat = '$alamat',
                email = '$email',
                telp = '$telp'
                WHERE id_anggota = '$id'
    ";        
} else {
    $query = "INSERT INTO anggota (nama, alamat, email, telp)
            VALUES ('$nama', '$alamat', '$email', '$telp')";
}

$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

if ($result) {
    header('Location: anggota-read.php');
}