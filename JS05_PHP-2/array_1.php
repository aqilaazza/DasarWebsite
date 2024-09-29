<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $Listdosen = ["Elok Nur Hamdan", "Unggul Pemenang", "Bagas Nugraha"];

        echo "<h5>Tanpa Looping</h5>";
        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";

        echo "<h5>Menggunakan Looping</h5>";
        for ($i = 0; $i < count($Listdosen) ; $i++) {
            echo $Listdosen [$i] . "<br>";
        }
        ?>
    </body>
</html>