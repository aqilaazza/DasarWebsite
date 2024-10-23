<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nilai1 = isset($_POST['nilai1']) ? floatval($_POST['nilai1']) : 0;
    $nilai2 = isset($_POST['nilai2']) ? floatval($_POST['nilai2']) : 0;
    $nilai3 = isset($_POST['nilai3']) ? floatval($_POST['nilai3']) : 0;
    $nilai4 = isset($_POST['nilai4']) ? floatval($_POST['nilai4']) : 0;
    $nilai5 = isset($_POST['nilai5']) ? floatval($_POST['nilai5']) : 0;

    // Menghitung rata-rata
    $rataRata = ($nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5) / 5;

    // Menentukan catatan berdasarkan rata-rata
    $catatan = "";
    if ($rataRata < 75) {
        $catatan = "Tetap semangat dan belajar lagi ya!";
    } else {
        $catatan = "You doing great!";
    }

    // Mengembalikan hasil sebagai JSON
    echo json_encode(['rataRata' => number_format($rataRata, 2), 'catatan' => $catatan]);
    exit(); // Hentikan eksekusi lebih lanjut
}
?>
