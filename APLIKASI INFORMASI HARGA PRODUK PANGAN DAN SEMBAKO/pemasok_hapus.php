<?
mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');
$id = $_GET["id"];

$q = "DELETE FROM pemasok WHERE id_pemasok='$id'";
$query = mysql_query($q);
if ($query) {
    echo "<script> 
    alert('data berhasil diubah');
    document.location.href = 'pemasok.php';
    </script>";
} else {
    echo "<script> alert('data gagal dihapus');</script>";
}
