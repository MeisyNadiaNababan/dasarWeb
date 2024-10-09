<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="post" action="proses_lanjut.php">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah" required>
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil dan sanitasi input
        $selectedBuah = $_POST['buah'];

        // Mengambil warna favorit
        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }

        // Mengambil jenis kelamin
        $selectedJenisKelamin = $_POST['jenis_kelamin'];

        // Tampilkan hasil
        echo "<h3>Hasil Pilihan Anda:</h3>";
        echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";

        if (empty($selectedWarna)) {
            echo "Anda tidak memilih warna favorit.<br>";
        } else {
            echo "Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna)) . "<br>";
        }

        echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
    }
    ?>
</body>
</html>