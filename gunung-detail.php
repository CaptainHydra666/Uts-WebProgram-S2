<?php
require_once "app.php";

$id = $_GET['id'];
$v = findgunung($conn, $id)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendakian</title>
</head>

<body>
    <h1>Riwayat Pendakian Detail</h1>

    <a href="/gunung.php">Kembali ke daftar gunung</a>

    <br>
    <br>

    <p>Id : <?= $v['id'] ?></p>
    <p>Tahun Pendakian : <?= $v['tahun_pendakian'] ?></p>
    <p>Nama Gunung : <?= $v['nama_gunung'] ?></p>
    <p>Ketinggian : <?= $v['ketinggian'] ?></p>

</body>

</html>