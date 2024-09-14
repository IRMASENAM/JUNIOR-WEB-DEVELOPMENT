<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Kode Plat Nomor</title>
</head>
<body>
    <form action="php-switch.php" method="get">
        <p>Kode Plat Nomor</p>
        <p><input type="text" name="kode_plat" value=""></p>
        <p><button type="submit">Cari</button></p>
    </form>
</body>
</html>

<?php
if(@$_GET){
$kode_plat_nomor = $_GET['kode_plat'];

switch ($kode_plat_nomor) {
    case 'A':
        # code...
        echo 'BANTEN';
        break;
    case 'B':
        # code...
        echo 'JAKARTA';
        break;
    case 'D':
        # code...
        echo 'CIREBON';
        break;
    case 'F':
        # code...
        echo 'BOGOR';
        break;

    case 'R':
        # code...
        echo 'CILACAP';
        break;

    default:
        # code...
        echo 'Kode Plat Nomor Belum Terdaftar';
        break;
}
}