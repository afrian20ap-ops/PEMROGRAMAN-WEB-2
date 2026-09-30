<?php
$file = fopen("test1.txt", "r");

if ($file) {
    while (!feof($file)) {
        echo fgets($file) . "<br />";
    }
    fclose($file);
} else {
    echo "Berkas test1.txt tidak ditemukan.";
}
?>
