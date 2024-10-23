<?php
session_start(); // Memulai sesi

// Mengecek apakah array sudah ada di sesi, jika belum buat array baru
if (!isset($_SESSION['pilih_warna'])) {
    $_SESSION['pilih_warna'] = [];
}

// Mengecek apakah form telah dikirim untuk menambahkan nama dan warna ke dalam array sesi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['color'])) {
    $name = htmlspecialchars($_POST['name']);
    $color = htmlspecialchars($_POST['color']);

    // Menambahkan pilihan ke dalam array sesi
    $_SESSION['pilih_warna'][] = ['name' => $name, 'color' => $color];

    // Mengembalikan respons JSON
    echo json_encode(['status' => 'success', 'message' => 'Warna berhasil ditambahkan.']);
    exit(); // Hentikan eksekusi lebih lanjut
}

// Mengecek apakah pencarian warna dilakukan
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['cari_warna'])) {
    $cari_warna = htmlspecialchars($_GET['cari_warna']);
    $matching_names = [];

    // Mencari nama berdasarkan warna yang dipilih
    foreach ($_SESSION['pilih_warna'] as $choice) {
        if (strtolower($choice['color']) == strtolower($cari_warna)) {
            $matching_names[] = $choice['name'];
        }
    }

    if (!empty($matching_names)) {
        $result = "Orang yang suka warna <strong>$cari_warna</strong>: " . implode(", ", $matching_names);
    } else {
        $result = "Tidak ada yang memilih warna <strong>$cari_warna</strong>.";
    }

    // Mengembalikan hasil pencarian sebagai JSON
    echo json_encode(['status' => 'success', 'result' => $result]);
    exit(); // Hentikan eksekusi lebih lanjut
}
?>
