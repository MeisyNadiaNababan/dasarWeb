<?php
$totalKursi = 45;

$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong di restoran adalah: {$kursiKosong} kursi.<br>";
echo "Persentase kursi yang masih kosong adalah: " . number_format($persentaseKosong, 2) . "%.";
?>
