<?php
$file = fopen("test1.txt", "r");

if ($file) {
    echo fgets($file);
    fclose($file);
} else {
    echo "Berkas test1.txt tidak ditemukan.";
}
?>
