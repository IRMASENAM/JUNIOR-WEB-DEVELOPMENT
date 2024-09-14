<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BEASISWA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 10px solid #ccc;
            border-radius: 10px;
        }
        input, button {
            width: 100%;
            padding: 15px;
            margin-top: 5px;
        }
        select{
            width: 85%;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    include 'nav.php';
    ?>
    <?php
    $ipk = rand(100,400)/100;
    define('RANDOM_NUMBER',$ipk);
    ?>

    <h1 align="center">DAFTAR BEASISWA</h1>
    <?php

    if (@$_GET['id']) {
        include 'koneksi.php';
        $id = $_GET['id'];

        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $mahasiswa = mysqli_query($koneksi, $query);
        $i = mysqli_fetch_array($mahasiswa);
    }
    ?>
    <form action="act-beasiswa.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= @$i['nama']?>"></td>
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
                <td>Semester</td>
                <td><select name="semester" value="<?= @$i['semester']?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    </select></td>
            </tr>
            <tr>
                <td>IPK</td>
                <td><input type="float" name="ipk" value="<?= $ipk ?>"></td>
            </tr>
            <?php
            if ($ipk <=3) {
                # code...
            
            ?>
            <tr>
                <td>Pilih Beasiswa</td>
                <td><select name="beasiswa" value="<?= @$i['beasiswa']?>" disabled>
                    <option value="beasiswa akademik">Beasiswa Akademik</option>
                    <option value="beasiswa non akademik">Beasiswa Non Akademik</option>
                    <option value="beasiswa luar negeri/internasional">Beasiswa Luar Negeri/Internasional</option>
                    <option value="beasiswa s1/s2">Beasiswa S1/S2</option>
                    <option value="beasiswa s3">Beasiswa S3</option>
                </td>
            </tr>
            <tr>
                <td>Upload Berkas Beasiswa</td>
                <td><input type="file" id="dok" name="dok" accept=".pdf, .jpg, .jpeg, .zip"></td>
            </tr>
            <tr>
                <td>
                <a class="btn btn-info btn-lg" href="read-beasiswa.php">Daftar</a>
                <a class="btn btn-warning btn-lg" href="home.php">Batal</a>
                </td>
            </tr>
            <?php
            } else {
            ?>
            <tr>
                <td>Pilih Beasiswa</td>
                <td><select name="beasiswa" value="<?= @$i['beasiswa']?>">
                    <option value="beasiswa akademik">Beasiswa Akademik</option>
                    <option value="beasiswa non akademik">Beasiswa Non Akademik</option>
                    <option value="beasiswa luar negeri/internasional">Beasiswa Luar Negeri/Internasional</option>
                    <option value="beasiswa s1/s2">Beasiswa S1/S2</option>
                    <option value="beasiswa s3">Beasiswa S3</option>
                </td>
            </tr>
            <tr>
                <td>Upload Berkas Beasiswa</td>
                <td><input type="file" id="dok" name="dok" accept=".pdf, .jpg, .jpeg, .zip"></td>
            </tr>
            <tr>
                <td>
                <a class="btn btn-info btn-lg" href="read-beasiswa.php">Daftar</a>
                <a class="btn btn-warning btn-lg" href="home.php" onclick="return confirm('Apakah anda yakin!')">Batal</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <input type="hidden" name="id" value="<?= @$i['id']?>">
    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>