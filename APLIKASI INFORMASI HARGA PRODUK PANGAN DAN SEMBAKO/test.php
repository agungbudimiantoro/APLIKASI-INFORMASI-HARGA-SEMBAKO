<?
$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'sembako');

$q = "SELECT * from pelanggan";
$hasil = mysql_query($q);

var_dump($hasil);
