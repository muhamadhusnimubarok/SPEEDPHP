<?php
$teks1 = "Selamat ulang tahun yang ke-17";
$teks2 = "dan selamat ulang tahun ya";

$hasil1 = (preg_match('/\d+/', $teks1, $matches1)) 
          ? "Teks 1 mengandung angka: " . $matches1[0] 
          : "Teks 1 tidak mengandung angka.";

$hasil2 = (preg_match('/\d+/', $teks2, $matches2)) 
          ? "Teks 2 mengandung angka: " . $matches2[0] 
          : "Teks 2 tidak mengandung angka.";

echo "<h2>Input 1: $teks1</h2>";
echo "<p>$hasil1</p>";

echo "<h2>Input 2: $teks2</h2>";
echo "<p>$hasil2</p>";
?>