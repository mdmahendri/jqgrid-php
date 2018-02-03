<?php
require 'dbconfig.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) 
or die("Connection Error: " . mysql_error());

$id = isset($_POST['id']) ? (int) $_POST['id'] : null;
$tahun = isset($_POST['tahun']) ? (int) $_POST['tahun'] : null;
$nama = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : null;
$harga = isset($_POST['harga']) ? (float) $_POST['harga'] : null;

switch($_POST['oper']){
	case 'add':
		$sql = "INSERT INTO harga_eceran (tahun, nama_barang, harga) values ($tahun,'$nama',$harga)";
	    if(mysqli_query($conn,$sql)) echo 'berhasil input baru';
	break;

	case 'edit':
        $sql = "UPDATE harga_eceran SET tahun=$tahun,nama_barang='$nama',harga=$harga WHERE id_barang=$id";
        if(mysqli_query($conn,$sql)) echo 'berhasil update data';
	break;

	case 'del':
		$sql = "DELETE FROM harga_eceran WHERE id_barang=$id";
        if(mysqli_query($conn,$sql)) echo 'berhasil hapus data';
	break;
}

mysqli_close($conn);