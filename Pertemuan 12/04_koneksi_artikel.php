<?php
$conn=new mysqli("localhost","root","","artikel_db");
if($conn->connect_error) die("Tidak dapat terhubung: ".$conn->connect_error);
echo "Koneksi database artikel_db berhasil";
$conn->close(); ?>