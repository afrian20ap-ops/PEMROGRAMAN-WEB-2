<?php
$conn=new mysqli("localhost","root","","lat_dbase");
echo $conn->query("DELETE FROM tbl_mhs WHERE LastName='Prabowo'") ? "Delete berhasil" : $conn->error;
$conn->close(); ?>