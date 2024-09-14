<?php
$file = fopen('db-kendaraan.txt', 'r');

echo '<ul>';
if (!$file) {
    echo 'File tidak ditemukan';
} else {
    $i = 1;
    while (!feof($file)) {
        # code...
        $txt = fgets($file);
        if (!empty($txt)) {
        echo'<li>' . $txt .'- <a href= "file-del.php?id=' . $i . '">hapus</a></li>';
        }
        $i++;
    }
    fclose($file);
}
echo '</ul>';