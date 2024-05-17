<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Riwayat Pendakian</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Tambah Riwayat Pendakian</h1>
    <a href="/gunung.php">Kembali ke daftar gunung</a>
    <div class="content">

        <form action="gunung-store.php" method="post">
            <div>
                <label>id</label>
                <input type="text" name="id">
            </div>
            <div>
                <label>Tahun Pendakian</label>
                <input type="text" name="tahun_pendakian">
            </div>
            <div>
                <label>Nama Gunung</label>
                <input type="text" name="nama_gunung">
            </div>
            <div>
                <label>Ketinggian</label>
                <input type="text" name="ketinggian">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>