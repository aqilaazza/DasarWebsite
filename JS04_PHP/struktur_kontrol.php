<?php
echo"Menentukan Nilai Huruf dengan elseif <br>";

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

echo"<br>Menentukam Jarak dengan While<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

echo"<br>Menentukan Jumlah Buah dengan for <br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

echo"<br>Menentukan Skor ujian dengan foreach <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor";

echo"<br>Menentukan Skor ujian dengan foreach <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai) {
     if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
     }

    echo "Nilai: $nilai (Lulus) <br>";
}

echo"<br>Studi kasus menghitung total nilai <br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

//Menentukan nilai terendah ke tertinggi 
sort($nilaiSiswa);

$totalNilai = 0;
for($k = 2; $k < count($nilaiSiswa)-2; $k++) {
    $totalNilai += $nilaiSiswa[$k];
}

$jumlahSiswa = count($nilaiSiswa) - 4;
$nilaiRata2 = $totalNilai / $jumlahSiswa;

echo "Jumlah siswa : $jumlahSiswa <br>";
echo "Total rata-rata (setelah mengabaikan 2 nilai terbesar dan terkecil) : $nilaiRata2 ";

echo "<br> Penjualan produk <br>";
$totalBelanja = 120000;

if ($totalBelanja > 100000) {
    $potonganHarga = $totalBelanja * 20/100;
    $totalBayar = $totalBelanja - $potonganHarga;
    echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
    echo "Diskon : 20% <br>";
    echo "Total Bayar : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
} else {
    $totalBayar = $totalBelanja;
    echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
    echo "Diskon : 0% <br>";
    echo "Total Bayar : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
}

echo "<br> Bermain game <br>";
$totalSkor = 100;
$batasan =500;

$hadiahTambahan = ($totalSkor > $batasan)? 'Ya': 'Tidak';

echo "Total skor pemain adalah : $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

