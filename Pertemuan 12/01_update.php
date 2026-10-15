<?php
$conn=new mysqli("localhost","root","","lat_dbase");
echo $conn->query("UPDATE tbl_mhs SET Age=36 WHERE FirstName='Karina' AND LastName='Suwandi'") ? "Update berhasil" : $conn->error;
$conn->close(); ?>