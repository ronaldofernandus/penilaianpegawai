<?php
//masukin controller dulu
include '../controller/pnsController.php';
//include '../index.php';
//deklarasi
$main = new pnsController();
//manggil fungsi di pns controller
$main->indexAdmin();
?>