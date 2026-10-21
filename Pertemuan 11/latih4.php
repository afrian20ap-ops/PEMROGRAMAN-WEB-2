<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {  
	die('Could not connect: ' . mysqli_connect_error());  
} 

$q1 = mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29')"); 
$q2 = mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Glenn', 'Gandari', '32')"); 

if ($q1 && $q2) {
    echo "Data berhasil disisipkan / dibuat!";
} else {
    echo "Gagal menyisipkan data: " . mysqli_error($con);
}

mysqli_close($con);
?>