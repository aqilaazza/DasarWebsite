<?php
$totalKursi = 45;
$kursiTerpakai = 28;

// Menghitung kursi yang tersedia
$kursiTersedia = $totalKursi - $kursiTerpakai;

// Menghitung persentase kursi yang kosong
$persentaseKursiKosong = (($totalKursi - $kursiTerpakai) / $totalKursi) * 100;

echo "Total kursi awal: {$totalKursi} <br> Kursi yang terpakai: {$kursiTerpakai} <br>";
echo "Persentase kursi kosong: " . number_format($persentaseKursiKosong, 2) . "%";

?>
