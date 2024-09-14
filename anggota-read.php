<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master Anggota</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>

</head>
<body>
    <div class="container">
    <h1 align="center">Data Anggota</h1>

<?php
include 'nav.php';
?>
<div class="btn btn-outline-info"><a href="anggota-form.php">Tambah Data</a></div>
</br>
</br>
<table class="table table-striped table-light table-hover">

    <tr align="center">
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Telp.</th>
        <th>Menu</th>
    </tr>

    <?php
    include 'koneksi.php';

    $query = "SELECT * FROM anggota";
    $anggota = mysqli_query($koneksi, $query);

    $no = 1;
    foreach ($anggota as $key => $value) {
        # code...
    ?>
        <tr align="center">
            <td><?=$no ?></td>
            <td><?=$value['nama'] ?></td>
            <td><?=$value['alamat'] ?></td>
            <td><?=$value['email'] ?></td>
            <td><?=$value['telp'] ?></td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>
<script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>