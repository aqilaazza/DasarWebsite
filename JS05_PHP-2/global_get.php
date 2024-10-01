<?php
$nama = @$_GET['nama']; 
//tanda @ diberikan agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; 

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>