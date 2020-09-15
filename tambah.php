<?php
include 'config/koneksi.php';
 
if(isset($_POST['tambah'])){
    $id= $_POST['id'];
    $Tanggal= $_POST['Tanggal_Bulan_Tahun'];
    $Nama= $_POST['Nama'];
    $ButirKegiatan= $_POST['ButirKegiatan'];
    $Nilai= $_POST['Nilai'];
    $Jumlah= $_POST['Jumlah'];
    $TotalNilai= $_POST['TotalNilai'];
 
    $submit= mysqli_query($conn,"INSERT INTO nilai_pak values ('' , '$Tanggal', '$Nama' ,'$ButirKegiatan' ,'$Nilai' ,'$Jumlah' ,'$TotalNilai',WHERE ID=$id)");

    echo "<script>;window.location='forms.php'</script>";
}
 
?>