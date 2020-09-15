<?php
include 'config/koneksi.php';
 
if(isset($_POST['login'])){
 
 $Username= $_POST['Username'];
 $Password= $_POST['Password'];
    

 $submit=mysqli_query($conn,"SELECT * FROM register WHERE Username	='$Username' AND Password = '$Password'");
 
 echo "<script>alert('Login telah berhasil');window.location='dashboard.php'</script>";
 

 
}
 
?>