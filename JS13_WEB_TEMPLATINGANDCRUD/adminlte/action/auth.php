<?php
include('../lib/Session.php');
include('../lib/Connection.php');

$session = new Session();

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if ($act == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan data user berdasarkan username
    $query = $db->prepare('SELECT * FROM m_user WHERE username = ?');
    $query->bind_param('s', $username);
    $query->execute();

    // Ambil data hasil query
    $data = $query->get_result()->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $data['password'])) {
        // Set session jika login berhasil
        $session->set('is_login', true);
        $session->set('username', $data['username']);
        $session->set('name', $data['nama']);
        $session->set('level', $data['level']);
        $session->commit();

        header('Location: ../index.php', false);
        exit;
    } else {
        // Jika login gagal
        $session->setFlash('status', false);
        $session->setFlash('message', 'Username dan password salah.');
        $session->commit();

        header('Location: ../login.php', false);
        exit;
    }
} else if ($act == 'logout') {
    // Hapus semua session saat logout
    $session->deleteAll();
    header('Location: ../login.php', false);
    exit;
}
?>
