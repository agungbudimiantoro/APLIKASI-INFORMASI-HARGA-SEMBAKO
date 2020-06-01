<?
mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');
$id = $_GET["id"];

$q = "DELETE FROM admin WHERE id_admin='$id'";
$query = mysql_query($q);
if ($query) {
    echo "<script> 
    alert('data berhasil diubah');
    document.location.href = 'admin.php';
    </script>";
    exit;
} else {
    echo "<script> alert('data gagal dihapus');</script>";
}
