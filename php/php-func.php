<?php
//parameter 1 dan 2
function biaya_kos($hari, $diskon)
{
    $harga = 15500;

    $total_bayar = ($hari*$harga) - $diskon;

    return number_format($total_bayar);
}

//$biaya_kos = biaya_kos(28,5550);
echo 'Biaya Kos PNC : '. biaya_kos(28, 5550);