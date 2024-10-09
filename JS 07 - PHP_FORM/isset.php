<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}
echo "<br>";
$data = array("nama" => "Jane", "usisa" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Vawriabel 'nama' tidak ditemukan dalam araay";
}
?>