<?php 
$link = mysqli_connect("localhost", "root", "", "lat_dbase"); 
$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs"); 

while($data = mysqli_fetch_array($hasil)) {  
	echo "$data[FirstName] $data[LastName] $data[Age]<br>"; 
}
?>