<?php
include 'config/koneksi.php';
 
if(isset($_POST['login'])){
 $user= trim(mysqli_real_escape_string($conn, $_POST['Username']));
 $pass= trim(mysqli_real_escape_string($conn, $_POST['pass']));
    

 $sql_login = mysqli_query($conn,"SELECT * FROM register WHERE Username	='$user' AND Password = '$pass'") or die(mysql_error($conn));


 echo mysqli_num_row($sql_login); 
 
}
 
?>