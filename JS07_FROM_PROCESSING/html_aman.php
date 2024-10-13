<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <h2>Form Input</h2>

    <?php
    // Inisialisasi variabel
    $inputNama = "";
    $inputEmail = "";
    $input = "";
    $input2 = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi dan ambil input nama
        if (empty($_POST["Nama"])) {
            $inputNama = "Nama tidak boleh kosong!";
        } else {
            // Ambil dan amankan input nama
            $input = htmlspecialchars($_POST["Nama"], ENT_QUOTES, 'UTF-8');
            echo "Nama berhasil disimpan!<br><br> ";
        }

        // Validasi dan ambil input email
        if (empty($_POST["email"])) {
            $inputEmail = "Email tidak boleh kosong!";
        } else {
            // Ambil dan amankan input email
            $input2 = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
            echo "Email berhasil disimpan! ";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Nama">Nama :</label>
        <input type="text" name="Nama" id="Nama" required>
        <span class="error"><?php echo $inputNama; ?></span><br><br>

        <label for="email">E-Mail :</label>
        <input type="email" name="email" id="email" required> 
        <span class="error"><?php echo $inputEmail; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
