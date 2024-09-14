<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beasiswa";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$beasiswa = $_POST['beasiswa'];
$file = $_FILES['file']['name'];
$status_ajuan = "Belum di verifikasi";

// Pindahkan file ke direktori uploads
move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $file);

$sql = "INSERT INTO pendaftaran (name, email, phone, semester, ipk, beasiswa, file, status_ajuan)
VALUES ('$name', '$email', '$phone', '$semester', '$ipk', '$beasiswa', '$file', '$status_ajuan')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>