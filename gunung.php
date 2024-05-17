<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gunung</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Riwayat Pendakian</h1>

    <a href="/">Kembali ke home</a>

    <br>

    <a href="/gunung-tambah.php">Tambah</a>

    <br>
    <br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_GUNUNG'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_GUNUNG'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Tahun Pendakian</th>
                <th>Nama Gunung</th>
                <th>Ketinggian</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
                <tr>
                    <td><?= $v['id'] ?></td>
                    <td><?= $v['tahun_pendakian'] ?></td>
                    <td><?= $v['nama_gunung'] ?></td>
                    <td><?= $v['ketinggian'] ?></td>
                    <td>
                        <a href="<?= "/gunung-detail.php?id={$v['id']}" ?>">Detail</a>
                        <a href="<?= "/gunung-edit.php?id={$v['id']}" ?>">Edit</a>
                        <a href="<?= "/hapus-gunung.php?id={$v['id']}" ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php
mysqli_close($conn);
?>