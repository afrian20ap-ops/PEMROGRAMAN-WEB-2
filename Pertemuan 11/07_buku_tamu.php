<?php
$conn=new mysqli("localhost","root","","buku_tamu_db");
if($_SERVER["REQUEST_METHOD"]==="POST"){
$s=$conn->prepare("INSERT INTO buku_tamu(nama,email,pesan) VALUES(?,?,?)");
$s->bind_param("sss",$_POST["nama"],$_POST["email"],$_POST["pesan"]); $s->execute(); $s->close();}
?>
<form method="post">Nama:<input name="nama" required><br>Email:<input name="email"><br>
Pesan:<textarea name="pesan" required></textarea><br><button>Kirim</button></form>
<h3>5 Data Terakhir</h3>
<?php $r=$conn->query("SELECT * FROM buku_tamu ORDER BY id DESC LIMIT 5");
while($d=$r->fetch_assoc()) echo htmlspecialchars($d["nama"])." - ".htmlspecialchars($d["pesan"])."<hr>";
$conn->close(); ?>