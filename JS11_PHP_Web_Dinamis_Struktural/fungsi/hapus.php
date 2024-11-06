<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }

        header("Location: ./index.php?page=jabatan");
    } else if (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM user WHERE user_id = '$id'";
        
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Anggota Telah Terhapus.");
        } else {
            pesan('danger', "Data Login Terhapus Tetapi Data Anggota Todak Terhapus Karena: " . mysqli_error($koneksi));
        }

        header("Location: ./index.php?page=anggota");
    }
}
?>