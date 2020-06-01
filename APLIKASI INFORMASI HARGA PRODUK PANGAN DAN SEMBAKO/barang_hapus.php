<?
mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');
$id = $_GET["id"];

$q = "DELETE FROM barang WHERE kd_barang='$id'";
$query = mysql_query($q);
if ($query) {
    echo "<script> 
    alert('data berhasil diubah');
    document.location.href = 'barang.php';
    </script>";
} else {
    echo "<script> alert('data gagal dihapus');</script>";
}
