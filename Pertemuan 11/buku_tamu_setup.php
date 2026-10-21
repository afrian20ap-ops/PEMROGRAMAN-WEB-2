<?php
$link = mysqli_connect("localhost", "root", "", "lat_dbase");

$sql = "CREATE TABLE buku_tamu (
	id int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
	nama varchar(50),
	email varchar(50),
	pesan text
)";
mysqli_query($link, $sql);
echo "Tabel buku_tamu berhasil dibuat.";
?>