<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$totalNilai = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

$jumlahSiswa = count($nilaiSiswa) - 4;
$nilaiRata2 = $totalNilai / $jumlahSiswa;

echo "Daftar nilai siswa: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai (setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah): $totalNilai<br>";
echo "Nilai rata-rata: " . number_format($nilaiRata2, 2);
?>