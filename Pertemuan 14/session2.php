<?php session_start();
if(isset($_SESSION["login"])){echo "<h1>Selamat Datang ".htmlspecialchars($_SESSION["login"])."</h1>";
echo "<h2>Halaman ini hanya bisa diakses jika sudah login.</h2><a href='session3.php'>Logout</a>";
}else die("Anda belum login! <a href='session1.php'>Silakan login</a>"); ?>