<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil penjumlahan {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil pengurangan {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil perkalian {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil pembagian {$a} / {$b} = {$hasilBagi} <br>";
echo "Sisa bagi {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil pangkat {$a} ** {$b} = {$pangkat} <br>";

echo "<br>"; // Jarak antara hasil aritmatika dan perbandingan

echo "{$a} == {$b} : " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "{$a} != {$b} : " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "{$a} < {$b} : " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "{$a} > {$b} : " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "{$a} <= {$b} : " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "{$a} >= {$b} : " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";
?>
