<?php
$a = 20;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "variabel a : {$a} <br>";
echo "variabel b : {$b} <br>";
echo "variabel c : {$c} <br>";
echo "variabel d : {$d} <br>";
echo "variabel e : {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3 ;

echo "Matematika : {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata : {$rataRata} <br>";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan.' '.$namaBelakang;

echo "Nama Depan : {$namaDepan} <br>";
echo 'Nama Belakang : ' . $namaBelakang . '<br>';

echo $namaLengkap;

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>