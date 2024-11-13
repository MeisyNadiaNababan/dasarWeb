<?php
define('HOST', 'localhost'); // biasanya localhost
define('USER', 'root');       // user default di XAMPP biasanya 'root'
define('PASSWORD', '');       // tidak ada password
define('DATABASE', 'prakwebdb'); // nama database

$db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}