<?php

require_once __DIR__ . '/vendor/autoload.php';
include'config/koneksi.php';
$query="SELECT * FROM pns INNER JOIN jabatan  ON pns.nama_jabatan = jabatan.Jabatan_id 
    INNER JOIN golongan ON pns.nama_golongan = golongan.Golongan_id";

$mpdf = new \Mpdf\Mpdf();

$html='<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Laporan Penilaian Pegawai</title>
</head>
<body>
<h1>  Laporan Data Pegawai</h1>
 <table border="1" cellpading="10" cellspacing="0">
        
                  <tr>
                   <th>NIP</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jabatan</th>
                  <th>Golongan</th>
                  </tr>';
        $result= mysqli_query($conn, $query);
        while ($row=mysqli_fetch_array($result))

$html.= '<tr>

                    <td>'.$row['NIP'].'</td> 
                    <td>'.$row['Nama'].'</td>
                    <td>'.$row['Alamat'].'</td>
                    <td>'.$row['nama_jabatan'].'</td>
                    <td>'.$row['nama_golongan'].'</td>

</tr>';


$html.='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>