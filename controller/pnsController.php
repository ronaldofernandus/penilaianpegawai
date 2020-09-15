<?php
include '../models/model.php';

class pnsController


{
    public $model;

    function __construct()
    {
        //ini konstructnya
        $this->model = new model();
    }


    //CONTROLLER !
    //ini fungsi buat manggil query yang ada di model
    function indexAdmin()
    {
        $data = $this->model->selectAll();
        //ini dia langsung nampilin viewnya
        include "../tabelpns.php";
    }
}
?>