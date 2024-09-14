<?php
$usia = 20;
$batas = 30;

if ($usia > $batas) {
    echo 'Maaf anda tidak memenuhi syarat';
} else {
    echo 'Selamat, anda dapat mengikuti pelatihan VSGA 2024';
}

echo '<br>';

$nilai = 80;
if ($nilai >= 80) {
    echo 'nilai : A';
} elseif ($nilai >=70) {
    echo 'nilai : B';
}
 elseif ($nilai >=50) {
    echo 'nilai : C';
}
 elseif ($nilai >=30) {
    echo 'nilai : D';
} else {
    echo 'nilai : E';
}