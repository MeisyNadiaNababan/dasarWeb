<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
        
        echo "<h3>Nama yang diterima:</h3>";
        echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
        
        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "<h3>Email yang diterima:</h3>";
            echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            // Tangani input yang tidak valid
            echo "<h3>Email tidak valid!</h3>";
        }
    }
    ?>
</body>
</html>