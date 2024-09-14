<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi - VSGA 2024</title>
</head>
<body>
    <h1>Form Transaksi</h1>

    <?php
    include 'koneksi.php';

    $anggota = mysqli_query($koneksi,"SELECT * FROM anggota");
    $buku = mysqli_query($koneksi,"SELECT * FROM buku");
    ?>

    <form action="transaksi-act.php" method="post">
    <table>
        <tr>
            <td>Anggota</td>
            <td>
                <select name="anggota" id="">
                    <?php
                    foreach ($anggota as $key => $value) {
                        # code...
                        echo '<option value="'.$value['id_anggota'].'">'.$value['nama'].'</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Buku</td>
            <td>
                <select name="buku" id="">
                    <?php
                    foreach ($buku as $key => $value) {
                        # code...
                        echo '<option value="'.$value['id_buku'].'">'.$value['judul_buku'].'</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="tanggal" id=""></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
    </form>
</body>
</html>