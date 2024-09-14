<?php
$hari = 30;
$harga_sewa = 15500;
$diskon = 5000;

$total_bayar = ($hari*$harga_sewa) - $diskon;

echo 'lama sewa: '.$hari.'<br>';
echo 'harga sewa: '.number_format($harga_sewa).'<br>';
echo 'diskon: '.number_format($diskon).'<br>';
echo 'Harga sewa Kos PNC per-bulan adalah : '. number_format($total_bayar).'rupiah';