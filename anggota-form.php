<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master Anggota</title>
</head>
<body>
    <h1>Form Anggota</h1>
    <?php
    if (@$_GET['id']) {
        include 'koneksi.php';
        $id = $_GET['id'];

        $query = "SELECT * FROM anggota WHERE id_anggota = '$id'";
        $anggota = mysqli_query($koneksi, $query);
        $i = mysqli_fetch_array($anggota);
    }
    ?>
    <form action="anggota-act.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= @$i['nama']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" rows="3"><?= @$i['alamat']?></textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?= @$i['email']?>"></td>
            </tr>
            <tr>
                <td>Telp.</td>
                <td><input type="text" name="telp" value="<?= @$i['telp']?>"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
        <input type="hidden" name="id_anggota" value="<?= @$i['id_anggota']?>">
    </form>
</body>
</html>