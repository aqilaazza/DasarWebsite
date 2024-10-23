<?php
session_start(); // Memulai sesi

if (isset($_POST['reset'])) {
    unset($_SESSION['data']); // Menghapus data dari session
    header("Location: " . $_SERVER['HTTP_REFERER']); // Redirect untuk menghindari re-submitting form
    exit(); // Hentikan eksekusi lebih lanjut
}

// Memastikan bahwa data ada di session
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = []; // Inisialisasi array kosong jika belum ada data di sesi
}

// Fungsi untuk menentukan predikat berdasarkan nilai
function getGrade($score) {
    if ($score >= 80) {
        return 'A';
    } elseif ($score >= 70) {
        return 'B';
    } elseif ($score >= 55) {
        return 'C';
    } elseif ($score >= 40) {
        return 'D';
    } else {
        return 'E';
    }
}

// Menambahkan data baru jika ada input dari form
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['reset']) && isset($_POST['name']) && isset($_POST['score'])) {
    $name = htmlspecialchars($_POST['name']); // Mengamankan input nama
    $score = intval($_POST['score']); // Konversi nilai menjadi integer

    // Menambahkan data ke sesi
    $_SESSION['data'][] = ['name' => $name, 'score' => $score];

    // Mengurutkan data berdasarkan nilai tertinggi
    usort($_SESSION['data'], function($a, $b) {
        return $b['score'] - $a['score']; // Urutkan dari yang tertinggi ke terendah
    });

    // Mengembalikan data terbaru dalam format JSON
    echo json_encode($_SESSION['data']);
    exit(); // Hentikan eksekusi lebih lanjut
}
?>
