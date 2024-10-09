<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];

        echo "<h3>Output:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email;
    }
?>