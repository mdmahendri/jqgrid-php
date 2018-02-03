<?php
require 'dbconfig.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) 
or die("Connection Error: " . mysql_error());

$id = isset($_POST['id']) ? (int) $_POST['id'] : null;
$tahun = isset($_POST['tahun']) ? (int) $_POST['tahun'] : null;
$bulan = isset($_POST['bulan']) ? (int) $_POST['bulan'] : null;
$inflasi_rate = isset($_POST['inflasi_rate']) ? (float) $_POST['inflasi_rate'] : null;
$ihk = isset($_POST['ihk']) ? (float) $_POST['ihk'] : null;

switch($_POST['oper']){
	case 'add':
		$sql = "INSERT INTO inflasi (tahun, bulan, inflasi_rate, ihk) values ($tahun,$bulan,$inflasi_rate, $ihk)";
	    if(mysqli_query($conn,$sql)) echo 'berhasil input baru';
	break;

	case 'edit':
        $sql = "UPDATE inflasi SET tahun=$tahun,bulan=$bulan,inflasi_rate=$inflasi_rate, ihk=$ihk WHERE id_entri=$id";
        if(mysqli_query($conn,$sql)) echo 'berhasil update data';
        else echo 'error bos';
	break;

	case 'del':
		$sql = "DELETE FROM inflasi WHERE id_entri=$id";
        if(mysqli_query($conn,$sql)) echo 'berhasil hapus data';
	break;
}

mysqli_close($conn);