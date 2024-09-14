<?php
$data_remove = $_GET['id'];
$file = fopen('db-kendaraan.txt', 'r');
$idx = 1;
while (!feof($file)) {
    # code...
    $data[$idx] = fgets($file);
    $idx++;
}
fclose($file);

$data[$data_remove] = '';

$new_file = fopen('db-kendaraan.txt', 'w');
$new_data = implode("",$data);
fwrite($new_file,$new_data);
fclose($new_file);
header('Location: file-read.php');