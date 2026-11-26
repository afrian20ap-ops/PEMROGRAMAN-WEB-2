<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$hasil_total = mysqli_query($con, "SELECT * FROM buku_tamu");
$jumlah_data = mysqli_num_rows($hasil_total);
$total_halaman = ceil($jumlah_data / $batas);

$hasil = mysqli_query($con, "SELECT * FROM buku_tamu limit $halaman_awal, $batas");

echo "<h2>Daftar Buku Tamu</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr>
	<th>Nama</th>
	<th>Email</th>
	<th>Pesan</th>
</tr>";

while($data = mysqli_fetch_array($hasil)){
	echo "<tr>
		<td>".$data['nama']."</td>
		<td>".$data['email']."</td>
		<td>".$data['pesan']."</td>
	</tr>";
}
echo "</table><br>";

// Navigasi Paging
echo "Halaman: ";
for($x = 1; $x <= $total_halaman; $x++){
	echo "<a href='?halaman=$x'>$x</a> ";
}
?>