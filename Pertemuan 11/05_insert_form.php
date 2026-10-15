<?php
$conn=new mysqli("localhost","root","","lat_dbase");
$stmt=$conn->prepare("INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES(?,?,?)");
$stmt->bind_param("ssi",$_POST["firstname"],$_POST["lastname"],$_POST["age"]);
echo $stmt->execute() ? "1 record added" : $stmt->error;
$stmt->close(); $conn->close();
?>