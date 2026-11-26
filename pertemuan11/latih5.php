<?php 
$link = mysqli_connect("localhost", "root", "", "lat_dbase"); 
// mysqli_db_query sudah usang, diganti dengan mysqli_query biasa setelah db dipilih
$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs"); 

while($data = mysqli_fetch_row($hasil)) {   
	echo "$data[0] $data[1] $data[2]<br>"; 
}
?>