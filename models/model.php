<?php

class model
{
    //database
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "laporan_penilaian";
	var $koneksi = "";

	function __construct()
	{
        //koneksi ke database
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}

	function execute($query)
	{
        //buat execute biar langsung
		return mysqli_query($this->koneksi, $query);
    }

    
	function selectAll()
	{
        //query nampilin pns
		$query = "SELECT * FROM pns  
		INNER JOIN jabatan  ON pns.nama_jabatan = jabatan.Jabatan_id 
		INNER JOIN golongan  ON pns.nama_golongan = golongan.Golongan_id";
		
		$on = $this->execute($query);
		return $on;
    }
    
    function fetch($var)
	{
        //ini fungsi tambahan fetch di view
		return mysqli_fetch_array($var);
	}

}
    
?>