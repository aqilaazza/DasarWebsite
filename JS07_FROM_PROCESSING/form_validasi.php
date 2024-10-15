<!DOCTYPE HTML>
<html>
    <head>
        <title>Form Input dengan Validasi menggunakan AJAX</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="POST">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span>
            <br><br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span>
            <br><br>

            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span>
            <br><br>

            <input type="submit" value="Submit">
        </form>

        <div id="result"></div> <!-- Untuk menampilkan hasil respons dari server -->

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault(); // Hentikan pengiriman form secara default

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    // Validasi Nama
                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    // Validasi Email
                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    // Validasi Password (minimal 8 karakter)
                    if (password.length < 8) {
                        $("#password-error").text("Password harus minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    if (valid) {
                        // Kirim data menggunakan AJAX
                        $.ajax({
                            url: 'proses_validasi.php', // File PHP yang menangani validasi
                            type: 'POST',
                            data: { nama: nama, email: email },
                            success: function(response) {
                                // Tampilkan hasil dari respons PHP
                                $("#result").html(response);
                            },
                            error: function() {
                                $("#result").html("Terjadi kesalahan saat mengirim data.");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
