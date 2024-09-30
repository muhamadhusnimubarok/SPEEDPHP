
<?php

    $uang = 140500;  

    function hitungPecahan($uang) {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
        $hasil = [];

        foreach ($pecahan as $nilai) {
            if ($uang >= $nilai) {
                $jumlahLembar = intdiv($uang, $nilai); 
                $uang -= $jumlahLembar * $nilai;       
                $hasil[$nilai] = $jumlahLembar;        
            }
        }

        return $hasil;  
    }

    $hasilPecahan = hitungPecahan($uang);

   
    echo "<h3>Uang: Rp. " . number_format($uang, 0, ',', '.') . "</h3>";
    echo "<h4>Lembar Rupiah:</h4>";
    foreach ($hasilPecahan as $nilai => $jumlahLembar) {
        echo "Rp. " . number_format($nilai, 0, ',', '.') . ": $jumlahLembar <br>";
    }
?>
