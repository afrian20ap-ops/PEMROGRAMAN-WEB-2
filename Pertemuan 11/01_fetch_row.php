<?php
$conn=new mysqli("localhost","root","","lat_dbase");
$r=$conn->query("SELECT * FROM tbl_mhs");
while($d=$r->fetch_row()) echo "$d[0] $d[1] $d[2] $d[3]<br>";
$conn->close();
?>