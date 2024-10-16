<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 2097152; // 2MB
    $uploadDir = "uploads/";

    foreach ($_FILES['file']['tmp_name'] as $key => $tmpName) {
        $fileName = $_FILES['file']['name'][$key];
        $fileSize = $_FILES['file']['size'][$key];
        $fileTmp = $_FILES['file']['tmp_name'][$key];
        $fileType = $_FILES['file']['type'][$key];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Cek ekstensi file
        if (!in_array($fileExt, $extensions)) {
            $errors[] = "$fileName: Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, atau GIF.";
            continue;
        }

        // Cek ukuran file
        if ($fileSize > $maxFileSize) {
            $errors[] = "$fileName: Ukuran file tidak boleh lebih dari 2 MB.";
            continue;
        }

        // Pindahkan file jika tidak ada error
        if (empty($errors)) {
            if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
                echo "$fileName berhasil diunggah.<br>";
            } else {
                echo "$fileName gagal diunggah.<br>";
            }
        }
    }

    // Tampilkan error jika ada
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>
