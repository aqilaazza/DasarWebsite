<?php
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama : ".$data["nama"];
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditentukan.";
}

?>