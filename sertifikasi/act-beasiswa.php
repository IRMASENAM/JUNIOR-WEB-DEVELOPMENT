<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$beasiswa = $_POST['beasiswa'];
$status_ajuan = 'belum diverifikasi';
$dok = $_POST['dok'];

include 'koneksi.php';
/**
 * ini adalah query untuk hapus data
 */
if (@$_GET['id']) {
    $id = $_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id = '$id'";
} 
/**
 * ini adalah query untuk ubah data
 */
else if (@$_POST['id']) {
    $id = $_POST['id'];
    
    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                email = '$email',
                telp = '$telp',
                semester = '$semester',
                ipk = '$ipk',
                beasiswa = '$beasiswa',
                status_ajuan = '$status_ajuan',
                dok = '$dok'
                WHERE id = '$id'
    ";        
} else {
    $query = "INSERT INTO mahasiswa (nama, email, telp, semester, ipk, beasiswa, status_ajuan, dok)
            VALUES ('$nama', '$email', '$telp', '$semester', '$ipk', '$beasiswa', '$status_ajuan', '$dok')";
}

$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

if ($result) {
    header('Location: read-beasiswa.php');
}