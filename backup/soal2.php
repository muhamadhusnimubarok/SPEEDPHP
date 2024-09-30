<?php
function hitung_kompensasi($jam_masuk, $jam_pulang) {
    $total = (strtotime($jam_pulang) - strtotime($jam_masuk)) / 3600; 
    $total = min(floor($total), 14); 

    $jam_lembur = max(0, $total - 8);
    $kompensasi = $jam_lembur > 0 ? 50000 + min($jam_lembur - 1, 5) * 25000 : 0;

    return [
        'kompensasi' => $kompensasi,
        'total' => $total,
        'jam_lembur' => $jam_lembur
    ];
}

$hasil = hitung_kompensasi("08:00", "22:00");

echo "Lama kerja: " . $hasil['total'] . " jam <br>";
echo "Jam lembur: " . $hasil['jam_lembur'] . " jam <br>";
echo "Kompensasi yang diterima: Rp." . number_format($hasil['kompensasi'], 0, ',', '.');
?>
