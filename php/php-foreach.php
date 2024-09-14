<?php
$warna = ['biru','hitam','merah','putih','hijau','kuning','pink'];

echo '<h1>Data Warna</h1>';
echo '<ul>';
foreach ($warna as $key => $value) {
    # code...
    echo '<li>'.$value.'</li>';
}
echo '</ul>';