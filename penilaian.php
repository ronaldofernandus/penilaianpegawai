<?php

function formatTanggal($date){
  // pisahkan tanda - dan jadikan array
  $pecah = explode('-', $date);
  return $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
}

require_once __DIR__ . '/vendor/autoload.php';
include'config/koneksi.php';
$query="SELECT * FROM nilai_pak";

$mpdf = new \Mpdf\Mpdf();

$html='<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Laporan Penilaian Pegawai</title>
</head>
<body>
<h1>  Laporan Penilaian Pegawai</h1>
 <table border="1" cellpading="10" cellspacing="0">
        
                  <tr>
                    <th>Tanggal/Bulan/Tahun</th>
                  <th>Nama</th>
                  <th>Kegiatan</th>
                  <th>Angka/Nilai</th>
                  <th>Jumlah</th>
                  <th>Total Nilai</th>
                  </tr>';
        $result= mysqli_query($conn, $query);
        while ($row=mysqli_fetch_array($result))

$html.= '<tr>

                    <td>'.formatTanggal($row['Tanggal_Bulan_Tahun']).'</td> 
                    <td>'.$row['Nama'].'</td>
                    <td>'.$row['ButirKegiatan'].'</td>
                    <td>'.$row['Nilai'].'</td>
                    <td>'.$row['Jumlah'].'</td>
                    <td>'.$row['TotalNilai'].'</td>

</tr>';


$html.='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>