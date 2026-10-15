<?php
$conn=new mysqli("localhost","root","","lat_dbase");
$r=$conn->query("SELECT * FROM tbl_mhs");
echo "Jumlah record ".$r->num_rows;
$conn->close();
?>