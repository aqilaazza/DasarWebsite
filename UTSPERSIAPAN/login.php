<?php
// Cek apakah permintaan POST diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username dan password yang benar
    $correctUsername = "aqila";
    $correctPassword = "aqila123";

    // Ambil data dari request POST
    $usernameInput = isset($_POST['username']) ? $_POST['username'] : '';
    $passwordInput = isset($_POST['password']) ? $_POST['password'] : '';

    // Cek apakah username dan password sesuai
    if ($usernameInput === $correctUsername && $passwordInput === $correctPassword) {
        echo "<span style='color:green;'>Login berhasil!</span>";
    } else {
        echo "<span style='color:red;'>Login gagal, cek kembali username dan password anda.</span>";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
