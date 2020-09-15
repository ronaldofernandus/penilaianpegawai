<?php
include 'config/koneksi.php';
      $getid = $_GET['id'];

      mysqli_query($conn,"DELETE FROM nilai_pak WHERE ID='$getid'");

      
       echo "<script>alert('berhasil di hapus');window.location='tabelpenilaian.php'</script>";
      
      
      


      ?>  