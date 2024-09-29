<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "Width = device-width, initial-scale = 1">
        <title>Data Dosen</title>
        <style>
            body {
                font-family : Arial, sans-serif;
                background-color : #f4f4f4;
                margin : 20px;
            }

            table {
                width : 50%;
                border-collapse : collapse;
                margin : 20px 0;
            }
            td {
                border : 1px solid #ddd;
                padding : 5px;
            }
            th {
                font-weight : bold;
                background-color : #ADD8E6;
                color : black;
                text-align : middle;
                border : 1px solid #ddd;
                padding : 5px;
            }
            tr:nth-child(even) {
                background-color : #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'];

            echo "Nama : {$Dosen ['nama']} <br>";
            echo "Nama : {$Dosen ['domisili']} <br>";
            echo "Nama : {$Dosen ['jenis_kelamin']} <br>";
         ?>

         <table>
            <tr>
            <th>Properti</th>
            <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama'];?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili'];?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['jenis_kelamin'];?></td>
            </tr>
         </table>
    </body>
</html>