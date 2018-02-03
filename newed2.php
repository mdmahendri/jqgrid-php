<?php
require 'dbconfig.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) 
or die("Connection Error: " . mysql_error());

$id = isset($_POST['id']) ? (int) $_POST['id'] : null;
$nama = isset($_POST['nama_prov']) ? $_POST['nama_prov'] : null;
$umk = isset($_POST['umk']) ? (int) $_POST['umk'] : null;
$umb = isset($_POST['umb']) ? (int) $_POST['umb'] : null;

switch($_POST['oper']){
	case 'add':
		$sql = "INSERT INTO umk_umb (nama_prov, umk, umb) values ('$nama',$umk,$umb)";
	    if(mysqli_query($conn,$sql)) echo 'berhasil input baru';
	break;

	case 'edit':
        $sql = "UPDATE umk_umb SET nama_prov='$nama',umk=$umk,umb=$umb WHERE id_entri=$id";
        if(mysqli_query($conn,$sql)) echo 'berhasil update data';
        else echo 'error bos';
	break;

	case 'del':
		$sql = "DELETE FROM umk_umb WHERE id_entri=$id";
        if(mysqli_query($conn,$sql)) echo 'berhasil hapus data';
	break;
}

mysqli_close($conn);