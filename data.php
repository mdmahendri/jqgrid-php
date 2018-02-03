<?php
require 'dbconfig.php';		
$db = mysql_connect($dbhost, $dbuser, $dbpass) or die("Connection Error: " . mysql_error());
mysql_select_db($dbname) or die("Error connecting to db.");

//Pie Chart UMK vs UMB
$SQL = "SELECT SUM(umk) AS total_umk, SUM(umb) AS total_umb FROM umk_umb"; 
$result = mysql_query($SQL) or die("Couldn't execute query.".mysql_error());
$rowPie = mysql_fetch_array($result,MYSQL_ASSOC);

//Bar Chart Rata-rata Barang Eceran
$SQL = "SELECT nama_barang, AVG(harga) AS harga FROM harga_eceran GROUP BY nama_barang"; 
$result = mysql_query($SQL) or die("Couldn't execute query.".mysql_error());
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	$s[] = $row;
}
$rowBar = $s;

//Line chart hasil ekta
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  
$query = "SELECT bulan, inflasi_rate FROM inflasi WHERE Tahun = 2017";
$queryMean = "SELECT tahun, AVG(inflasi_rate) as rata_inflasi FROM inflasi GROUP BY tahun";
$queryIHK = "SELECT bulan, ihk FROM inflasi WHERE tahun = 2017";
$queryMeanIHK = "SELECT tahun, AVG(ihk) as rata_ihk FROM inflasi GROUP BY tahun";  
$result = mysqli_query($connect, $query);  
$result1 = mysqli_query($connect, $queryMean);
$result2 = mysqli_query($connect, $queryIHK);
$result3 = mysqli_query($connect, $queryMeanIHK);