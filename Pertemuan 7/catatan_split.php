<?php
/*
Materi Pertemuan 7 menjelaskan fungsi split() untuk memecah
string menjadi array. Pada PHP modern, split() sudah tidak
tersedia lagi. Pengganti yang digunakan adalah explode().

Contoh:
*/
$teks = "HTML,PHP,CSS,JavaScript";
$program = explode(",", $teks);

print_r($program);
?>