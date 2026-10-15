<?php
$conn=new mysqli("localhost","root","","lat_dbase");
if($conn->connect_error) die("Koneksi gagal: ".$conn->connect_error);
echo "OK.... koneksi berhasil";
$conn->close();
?>