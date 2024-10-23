<?php
session_start(); // Memulai sesi

// Memeriksa apakah array sudah ada di sesi, jika tidak, buat array baru
if (!isset($_SESSION['data_ranking'])) {
    $_SESSION['data_ranking'] = [];
}

// Mengatur reset data jika tombol reset ditekan
if (isset($_POST['reset'])) {
    unset($_SESSION['data_ranking']);
    echo json_encode($_SESSION['data_ranking']); // Mengembalikan array kosong
    exit();
}

// Memeriksa jika form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['score'])) {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $score = intval($_POST['score']);

    // Menambahkan data ke dalam array sesi
    $_SESSION['data_ranking'][] = ['name' => $name, 'score' => $score];

    // Mengembalikan data ranking dalam format JSON
    echo json_encode(getRanking($_SESSION['data_ranking']));
    exit(); // Menghentikan script setelah mengembalikan data
}

// Fungsi untuk mendapatkan ranking
function getRanking($data) {
    // Mengurutkan data berdasarkan nilai (score) secara menurun
    usort($data, function($a, $b) {
        return $b['score'] <=> $a['score'];
    });
    return $data;
}
?>
