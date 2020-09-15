<?php
include 'config/koneksi.php';
 
if(isset($_POST['kirim'])){
 
 $Nama= $_POST['Nama'];
 $Username= $_POST['Username'];
 $Password= $_POST['Password'];
    //$Password=password_hash($Password, PASSWORD_DEFAULT);
    

 $submit=mysqli_query($conn, "INSERT INTO register values('', '$Nama', '$Username','$Password')");

 echo "<script>alert('Register telah berhasil');window.location='login.php'</script>";

 
}
 
?>