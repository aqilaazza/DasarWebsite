<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    $max_file_size = 2097152; // Batas ukuran file (2 MB)

    // Mengambil jumlah file yang diunggah
    $total_files = count($_FILES['files']['name']);

    // Loop untuk menangani setiap file
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, dan GIF.";
            continue; // Lanjutkan ke file berikutnya
        }

        // Validasi ukuran file
        if ($file_size > $max_file_size) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
            continue; // Lanjutkan ke file berikutnya
        }

        // Jika tidak ada masalah, unggah file
        $unique_name = uniqid('img_', true) . '.' . $file_ext;
        $target_directory = "uploads/"; // Direktori tujuan untuk menyimpan file
        $target_file = $target_directory . $unique_name;

        // Pindahkan file ke direktori tujuan
        if (move_uploaded_file($file_tmp, $target_file)) {
            echo "$file_name berhasil diunggah sebagai $unique_name.<br>";

            // Menampilkan gambar thumbnail dengan lebar 200px
            echo "<img src='$target_file' width='200' style='margin: 10px;' alt='Thumbnail'><br>";
        } else {
            $errors[] = "$file_name: Gagal mengunggah file.";
        }
    }

    // Jika ada error, tampilkan semua pesan error
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
