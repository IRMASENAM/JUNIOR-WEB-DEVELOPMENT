<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDAFTAR BEASISWA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>

</head>
<body>
    <div class="container">
    <?php
    include 'nav.php';
    ?>
    <h1 align="center">DATA PENDAFTAR BEASISWA</h1>
</br>
</br>

<table class="table table-striped table-light table-hover">

    <tr align="center">
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telp.</th>
        <th>Semester</th>
        <th>IPK</th>
        <th>Beasiswa</th>
        <th>File</th>
        <th>Status Ajuan</th>
        <th>Menu</th>
    </tr>

    <?php
    include 'koneksi.php';

    $query = "SELECT * FROM mahasiswa";
    $mahasiswa = mysqli_query($koneksi, $query);

    $no = 1;
    foreach ($mahasiswa as $key => $value) {
        # code...
    ?>
        <tr align="center">
            <td><?=$no ?></td>
            <td><?=$value['nama'] ?></td>
            <td><?=$value['email'] ?></td>
            <td><?=$value['telp'] ?></td>
            <td><?=$value['semester'] ?></td>
            <td><?=$value['ipk'] ?></td>
            <td><?=$value['beasiswa'] ?></td>
            <td><?=$value['dok'] ?></td>
            <td><?=$value['status_ajuan'] ?></td>
            <td><div class="btn btn-outline-success"><a href="form-beasiswa.php?id=<?=$value['id']?>">Edit</a></div>
            <div class="btn btn-outline-danger"><a href="act-beasiswa.php?id=<?=$value['id']?>" onclick="return confirm('Apakah anda yakin!')">Delete</a></div>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>
<a class="btn btn-light btn-lg" href="form-beasiswa.php">Kembali</a>
<a class="btn btn-light btn-lg" href="home.php">Kembali Ke Beranda</a>
<script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>