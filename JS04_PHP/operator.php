<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Apabila a = " .$a. " dan b = " .$b. " maka: <br>";
echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Sisa Bagi : {$sisaBagi} <br>";
echo "Hasil Pangkat : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "{$a} == {$b} : " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "{$a} != {$b} : " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "{$a} < {$b} : " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "{$a} > {$b} : " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "{$a} <= {$b} : " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "{$a} >= {$b} : " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "{$a} AND {$b} : " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "{$a} OR {$b} : " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "NOT {$a} : " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "NOT {$b} : " . ($hasilNotB ? 'True' : 'False') . "<br>";

$a += $b;
echo "Setelah \$a += \$b,\$a = {$a}  <br>";
$a -= $b;
echo "Setelah \$a -= \$b,\$a = {$a}  <br>";
$a *= $b;
echo "Setelah \$a *= \$b,\$a = {$a}  <br>";
$a /= $b;
echo "Setelah \$a /= \$b,\$a = {$a}  <br>";
$a %= $b;
echo "Setelah \$a %= \$b,\$a = {$a}  <br>";

$a = 10;
$b = 5;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah hasil \$a identik dengan \$b ? " . ($hasilIdentik ? 'Ya' : 'Tidak' ). " <br>";
echo "Apakah hasil \$a tidak identik dengan \$b ? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak' ). " <br>";
?>