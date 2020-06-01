<?
mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');


if (isset($_POST["simpan"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysql_query("SELECT * FROM pengguna WHERE username='$username' and password='$password'");

    if (mysql_num_rows($query) === 1) {
        echo "<script> 
        alert('SELAMAT DATANG');
        document.location.href = 'daftar_barang.php';
        </script>";
    } else {
        echo "<script> alert('password atau username salah');</script>";
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
    <title>login</title>
    <style>
        body {
            background-color: skyblue;
        }

        .kotak {
            margin: 100px auto;
            width: 600px;
            height: 400px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="kotak">
        <br>
        <h3 class="text-center">LOGIN</h3>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Login</button>
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