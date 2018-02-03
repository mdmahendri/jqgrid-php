<?php
require 'dbconfig.php';

$page = $_GET['page'];
$limit = $_GET['rows'];
$sidx = $_GET['sidx'];
$sord = $_GET['sord']; 

if(!$sidx) $sidx =1; 
$db = mysql_connect($dbhost, $dbuser, $dbpass) or die("Connection Error: " . mysql_error());
mysql_select_db($dbname) or die("Error connecting to db.");
$result = mysql_query("SELECT COUNT(*) AS count FROM harga_eceran"); 
$row = mysql_fetch_array($result,MYSQL_ASSOC);

$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
              $total_pages = ceil($count/$limit); 
} else { 
              $total_pages = 0; 
}

if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0;

$SQL = "SELECT id_barang, tahun, nama_barang, harga FROM harga_eceran ORDER BY $sidx $sord LIMIT $start , $limit"; 
$result = mysql_query($SQL) or die("Couldn't execute query.".mysql_error());

header("Content-type: text/xml;charset=utf-8"); 
$s = "<?xml version='1.0' encoding='utf-8'?>";
$s .=  "<rows>";
$s .= "<page>".$page."</page>";
$s .= "<total>".$total_pages."</total>";
$s .= "<records>".$count."</records>";
 
while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
    $s .= "<row id='". $row['id_barang']."'>";
    $s .= "<cell>". $row['tahun']."</cell>";
    $s .= "<cell>". $row['nama_barang']."</cell>";
    $s .= "<cell>". $row['harga']."</cell>";
    $s .= "</row>";
}
$s .= "</rows>"; 
 
echo $s;
?>