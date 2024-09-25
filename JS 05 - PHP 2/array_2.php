<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<?php
$Dosen = [
    'nama' => 'Rusdi Larom Tinus',
    'domisili' => 'Surabaya',
    'jenis_kelamin' => 'Laki-laki'
];
?>

<table>
    <tr>
        <th>Data</th>
        <th>Informasi</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>