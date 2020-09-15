<?php
include 'config/koneksi.php';
 
if(isset($_POST['edit'])) {
    $id= $_POST['id'];
	$Tanggal= $_POST['Tanggal_Bulan_Tahun'];
    $Nama= $_POST['Nama'];
    $ButirKegiatan= $_POST['ButirKegiatan'];
    $Nilai= $_POST['Nilai'];
    $Jumlah= $_POST['Jumlah'];
    $TotalNilai= $_POST['TotalNilai'];

    $QueryString = "UPDATE nilai_pak SET Tanggal_Bulan_Tahun='$Tanggal' , Nama='$Nama' , ButirKegiatan='$ButirKegiatan' , Nilai='$Nilai', Jumlah='$Jumlah' ,TotalNilai='$TotalNilai' WHERE id='$id'";

    $submit=mysqli_query($conn,"UPDATE nilai_pak SET Tanggal_Bulan_Tahun='$Tanggal' , Nama='$Nama' , ButirKegiatan='$ButirKegiatan' , Nilai='$Nilai', Jumlah='$Jumlah' ,TotalNilai='$TotalNilai' WHERE id='$id'");

    echo "<script>alert('berhasil di edit');window.location='tabelpenilaian.php'</script>";
}


 
?>