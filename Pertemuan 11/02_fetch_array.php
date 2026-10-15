<?php
$conn=new mysqli("localhost","root","","lat_dbase");
$r=$conn->query("SELECT * FROM tbl_mhs");
while($d=$r->fetch_assoc()) echo "$d[FirstName] $d[LastName] $d[Age]<br>";
$conn->close();
?>