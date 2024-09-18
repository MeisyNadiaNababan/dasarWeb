<?php
$hargaProduk = 120000;
$diskonPersentase = 20; 
$hargaMinimumDiskon = 100000; 

if ($hargaProduk > $hargaMinimumDiskon) {
    $jumlahDiskon = ($diskonPersentase / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
} else {
    $hargaSetelahDiskon = $hargaProduk;
}

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
if ($hargaProduk > $hargaMinimumDiskon) {
    echo "Diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
}
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
?>
