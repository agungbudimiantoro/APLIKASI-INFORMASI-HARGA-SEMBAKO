<?
mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');
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
    <title>daftar harga barang sembako</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="">Pengguna</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-item nav-link" href="index.php">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <br>
                <h3>Daftar harga Barang sembako</h3>
                <br>
                <hr>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">KD BARANG</th>
                            <th scope="col">NAMA BARANG</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">ID PEMASOK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? $query = mysql_query("SELECT * FROM barang");
                        $hasil = array();
                        while ($data = mysql_fetch_assoc($query)) :
                        ?>


                            <tr>
                                <th scope="row"><? echo $data["kd_barang"]; ?></th>
                                <td><? echo $data["nm_barang"]; ?></td>
                                <td><? echo $data["harga_barang"]; ?></td>
                                <td><? echo $data["id_pemasok"]; ?></td>
                            <?
                        endwhile;
                            ?>
                    </tbody>
                </table>
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