<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi - VSGA 2024</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 align="center">Data Transaksi</h1>
    <?php
include 'nav.php';
?>
    <a href="transaksi-form.php">Tambah Transaksi</a>
    <a href="transaksi-print.php" target="_blank">Print Transaksi</a>
    <table class="table table-striped table-primary table-hover">
        <tr align="center">
            <th>No.</th>
            <th>No Transaksi</th>
            <th>Tanggal</th>
            <th>Anggota</th>
            <th>Buku</th>
            <th>Menu</th>
        </tr>

        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM transaksi
            JOIN anggota ON anggota.id_anggota = transaksi.anggota
            JOIN buku ON buku.id_buku = transaksi.buku
        ";  
        $transaksi = mysqli_query($koneksi,$query);

        $no = 1;
        foreach ($transaksi as $key => $value) {
            # code...
        ?>
        <tr align="center">
            <td><?=$no ?></td>
            <td><?=$value['no_transaksi'] ?></td>
            <td><?=$value['tanggal'] ?></td>
            <td><?=$value['nama'] ?></td>
            <td><?=$value['judul_buku'] ?></td>
            
        </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>