<?php


require_once("pdf/dompdf_config.inc.php");

mysql_connect('localhost', 'root', '');
mysql_select_db('harga_sembako');

$html = '<html></body>';
$html .= '<center><h2>LAPORAN HARGA BARANG POKOK (SEMBAKO)</h2></center><br/>';
$html .= "<p>Tanggal : ". date('d-m-yy') ." </p><hr/><br/>";
$html .= '<table border="1" align="center" width="100%">
 <tr>
 <th>KODE Barang</th>
 <th>Nama Barang</th>
 <th>Harga Barang</th>
 <th>ID Pemasok</th>
 </tr>';
$query = mysql_query("SELECT * FROM barang");
while ($data = mysql_fetch_assoc($query)) :
    $html .= "<tr>
    <td>" . $data['kd_barang'] . "</td>
    <td>" . $data['nm_barang'] . "</td>
    <td>" . $data['harga_barang'] . "</td>
    <td>" . $data['id_pemasok'] . "</td>
    </tr>";
endwhile;

$html .= "</table></body></html>";

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('laporan_barang.pdf');
