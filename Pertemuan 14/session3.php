<?php session_start();
$_SESSION=[]; session_destroy();
echo "<h1>Anda sudah berhasil LOGOUT</h1><a href='session1.php'>LOGIN kembali</a>"; ?>