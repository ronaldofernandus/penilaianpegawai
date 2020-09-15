<?php
include 'config/koneksi.php';
 
if(isset($_POST['submit'])){
 
    $Tanggal= $_POST['Tanggal_Bulan_Tahun'];
    $Nama= $_POST['Nama'];
    $ButirKegiatan= $_POST['ButirKegiatan'];
    $Nilai= $_POST['Nilai'];
    $Jumlah= $_POST['Jumlah'];
    $TotalNilai= $_POST['TotalNilai'];
 
    $submit= mysqli_query($conn,"INSERT INTO nilai_pak values ('' , '$Tanggal', '$Nama' ,'$ButirKegiatan' ,'$Nilai' ,'$Jumlah' ,'$TotalNilai','1')");

    echo "<script>alert('berhasil di tambahkan');window.location='tabelpenilaian.php'</script>";
}
 
?>