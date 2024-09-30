<?php
    
    $usiaArray = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

    function hitungKategoriUsia($usiaArray) {
        $jumlahAnak = 0;  
        $jumlahDewasa = 0;

        foreach ($usiaArray as $usia) {
            if ($usia < 17) {
                $jumlahAnak++;   
            } else {
                $jumlahDewasa++; 
            }
        }

        return [
            'jumlahAnak' => $jumlahAnak,
            'jumlahDewasa' => $jumlahDewasa
        ];
    }

    $hasil = hitungKategoriUsia($usiaArray);

    echo "<h4>List Usia: " . implode(', ', $usiaArray) . "</h4>";
    echo "Jumlah Kategori Dewasa: " . $hasil['jumlahDewasa'] . "<br>";
    echo "Jumlah Kategori Anak-Anak: " . $hasil['jumlahAnak'] . "<br>";
?>
