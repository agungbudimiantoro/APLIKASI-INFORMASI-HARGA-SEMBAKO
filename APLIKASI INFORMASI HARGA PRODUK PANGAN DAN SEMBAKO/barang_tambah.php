<?
mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');

if (isset($_POST["simpan"])) {
    $kd_barang = $_POST["kd_barang"];
    $nm_barang = $_POST["nm_barang"];
    $harga_barang = $_POST["harga_barang"];
    $id_pemasok = $_POST["id_pemasok"];

    $data = "INSERT INTO barang VALUES('$kd_barang','$nm_barang','$harga_barang','$id_pemasok')";
    $query = mysql_query($data);
    if ($query) {
        echo "<script> 
        alert('data berhasil diubah');
        document.location.href = 'barang.php';
        </script>";
    } else {
        echo "<script> alert('data gagal ditambahkan');</script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>tambah barang</title>
    <style>

    </style>
</head>

<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <br>
                <h3>Tambah Data Barang</h3>
                <br>
                <a href="barang.php" class="btn btn-primary">
                    <- Kembali </a> <hr>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>KD BARANG</label>
                                <input type="text" name="kd_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>NAMA BARANG</label>
                                <input type="text" name="nm_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>HARGA BARANG</label>
                                <input type="number" name="harga_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>ID PEMASOK</label>
                                <input type="text" name="id_pemasok" class="form-control" required>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
                        </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>