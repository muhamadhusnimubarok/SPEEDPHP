<?php

$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

hitungAngka($data, $cari);
function hitungAngka($data, $cari) {
   
    $jumlah = 0;

    foreach ($data as $nilai) {
        if ($nilai == $cari) {
            $jumlah++;
        }
    }


    echo "Jumlah angka $cari = $jumlah";
}


?>

