<?php
// Langsung melakukan koneksi sekaligus memilih database
$link = mysqli_connect("localhost", "root", "", "lat_dbase"); 

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// membuat tabel
$sql = "CREATE TABLE tbl_mhs (
	mhsID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(mhsID),
	FirstName varchar(15),
	LastName varchar(15),
	Age int
)";
$create_table = mysqli_query($link, $sql);

// input data
$input = mysqli_query($link, "INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES('Anjar','Prabowo',25)");

if ($input) {
    echo "Tabel tbl_mhs dan data awal berhasil dibuat!";
} else {
    echo "Gagal membuat/menambahkan data: " . mysqli_error($link);
}

mysqli_close($link);
?>