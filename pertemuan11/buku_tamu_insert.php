<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO buku_tamu (nama, email, pesan) VALUES('$nama', '$email', '$pesan')";
mysqli_query($con, $sql);

echo "Data buku tamu berhasil ditambahkan. <a href='buku_tamu_tampil.php'>Lihat Buku Tamu</a>";
mysqli_close($con);
?>