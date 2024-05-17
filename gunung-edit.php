<?php
require_once "app.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $tahun_pendakian = $_POST['tahun_pendakian'];
    $nama_gunung = $_POST['nama_gunung'];
    $ketinggian = $_POST['ketinggian'];

    $sql = "UPDATE gunung SET `id`='$id',`tahun_pendakian`='$tahun_pendakian',`nama_gunung`='$nama_gunung',`ketinggian`='$ketinggian' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: gunung.php?msg=Data updated successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Update Data Gunung</title>
    </head>

    <body>

        <div class="container">
            <div class="text-center mb-4">
                <h3>Edit Data</h3>
                <p class="text-muted">Click update after changing any information</p>
            </div>

            <?php
            $sql = "SELECT * FROM `gunung` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $v = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Id:</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $v['id'] ?>">
                        </div>

                        <div class="col">
                            <label class="form-label">Tahun Pendakian:</label>
                            <input type="text" class="form-control" name="tahun_pendakian" value="<?php echo $v['tahun_pendakian'] ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Gunung:</label>
                        <input type="text" class="form-control" name="nama_gunung" value="<?php echo $v['nama_gunung'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ketinggian:</label>
                        <input type="text" class="form-control" name="ketinggian" value="<?php echo $v['ketinggian'] ?>">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="gunung.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>

    </html>
