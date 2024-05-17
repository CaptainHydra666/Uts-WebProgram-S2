<?php
require_once "app.php";
session_start();

$n = datagunung($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_GUNUNG'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_GUNUNG'] = "Berhasil menambah data gunung: {$_POST['id']}, tahun pendakian: {$_POST['tahun_pendakian']}, nama gunung: {$_POST['nama_gunung']}, ketinggian: {$_POST['ketinggian']}";
}

header("Location: /gunung.php");
die();

