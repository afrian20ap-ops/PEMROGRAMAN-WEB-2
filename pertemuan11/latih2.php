<?php
$link = mysqli_connect("localhost", "root", "");
$dbname = "lat_dbase";
$cek = mysqli_query($link, "CREATE DATABASE $dbname") or die("Couldn't Create Database: " . mysqli_error($link));  

if($cek){  
	echo "Database $dbname berhasil dibuat";
}
?>