<?php
/**
 * perulangan menggunakan
 * metode "for"
 */

 for ($i=0; $i < 10; $i++) {
    # code...
    if ($i== 4) {
        //break;
        //continue;
        exit;
    }
    echo 'Ini adalah Perulangan For ke-'.$i.'<br>';
 }
echo '<br>';
 /**
  * perulangan menggunakan
  * metode "while"
  */
  $a = 0;
  while ($a <= 10) {
  echo 'Ini adalah Perulangan "While" ke-'.$a.'<br>';
  $a++;
}
echo '<br>';
/**
 * perulangan menggunakan
 * metode "do-while"
 */
    $x = 0;
    do {
        #code...
        echo 'Ini adalah Perulangan "Do-While" ke-'.$x.'<br>';
        $x++;
    } while ($x <= 10);