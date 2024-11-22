<?php
if(session_status() === PHP_SESSION_NONE)
    session_start();

if (!empty($_SESSION['level'])) {
    require 'config/koneksi.php';
    require 'fungsi/pesan_kilat.php';

    include 'template/header.php';
    if (!empty($_GET['page'])) {
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        include 'template/home.php';
    }
    include 'template/footer.php';
} else {
    header("Location: login.php"); 
    exit;
}
?>
