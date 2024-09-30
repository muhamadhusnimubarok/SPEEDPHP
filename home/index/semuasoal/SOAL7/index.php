<?php

$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

function bandingkanNama($nama1, $nama2) {
    $jumlah_karakter1 = strlen($nama1);
    $jumlah_karakter2 = strlen($nama2);

    echo "Nama pertama: $nama1 <br>";
    echo "Nama kedua: $nama2 <br>";

    if ($jumlah_karakter1 > $jumlah_karakter2) {
        $selisih = $jumlah_karakter1 - $jumlah_karakter2;
        echo "<u>$nama1</u> memiliki jumlah karakter lebih banyak dari <u>$nama2</u> dengan selisih $selisih karakter.";
    } elseif ($jumlah_karakter2 > $jumlah_karakter1) {
        $selisih = $jumlah_karakter2 - $jumlah_karakter1;
        echo "<u>$nama2</u> memiliki jumlah karakter lebih banyak dari <u>$nama1</u> dengan selisih $selisih karakter.";
    } else {
        echo "<u>$nama1</u> dan <u>$nama2</u> memiliki jumlah karakter yang sama.";
    }
}

bandingkanNama($nama1, $nama2);
?>
