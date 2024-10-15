<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari dropdown
            $selectBuah = $_POST['buah'];

            // Ambil nilai dari checkbox (warna)
            if (isset($_POST['warna'])) {
                $selectedWarna = $_POST['warna'];
            } else {
                $selectedWarna = [];
            }

            // Ambil nilai dari radio button (jenis kelamin)
            if (isset($_POST['Jenis_kelamin'])) {
                $selectedJenisKelamin = $_POST['Jenis_kelamin'];
            } else {
                $selectedJenisKelamin = "Tidak dipilih";
            }

            // Tampilkan pilihan
            echo "Anda memilih buah: " . $selectBuah . "<br>";

            if (!empty($selectedWarna)) {
                echo "Warna favorit anda: " . implode(", ", $selectedWarna) . "<br>";
            } else {
                echo "Anda tidak memilih warna favorit.<br>";
            }

            echo "Jenis kelamin anda: " . $selectedJenisKelamin . "<br>";
        }
        ?>