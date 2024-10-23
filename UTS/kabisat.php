<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari POST
    $tahun = isset($_POST['tahun']) ? intval($_POST['tahun']) : 0;

    // Validasi input harus berupa 4 digit
    if (strlen($tahun) !== 4) {
        echo "Error: Silakan masukkan tahun yang valid (4 digit).";
        exit;
    }

    // Menentukan apakah tahun kabisat
    if (isTahunKabisat($tahun)) {
        echo "$tahun adalah tahun kabisat!";
    } else {
        echo "$tahun bukan tahun kabisat.";
    }
}

// Fungsi untuk menentukan tahun kabisat
function isTahunKabisat($tahun) {
    return ($tahun % 4 === 0 && $tahun % 100 !== 0) || ($tahun % 400 === 0);
}
?>
