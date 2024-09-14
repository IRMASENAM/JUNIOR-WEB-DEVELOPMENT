<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Form Kendaraan</h1>
    <form action="file-add.php" method="post">
    <p>Nama Kendaraan</p>
    <p>
        <input type="text" name="kendaraan" id="">
    </p>
    <p>
        <button type="submit">Simpan</button>
    </p>
    </form>
    
    <?php
    if (@$_POST) {
        $kendaraan = $_POST ['kendaraan'] . "\n";

        $file = fopen('db-kendaraan.txt','a');
        fwrite($file, $kendaraan);
        fclose($file);
    }
    ?>
</body>
</html>