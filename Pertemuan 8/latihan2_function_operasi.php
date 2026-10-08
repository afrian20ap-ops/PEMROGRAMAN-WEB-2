<!DOCTYPE html>
<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<form method="post">
    Masukkan Bilangan Pertama : <br>
    <input type="number" name="A" size="10"><br>

    Masukkan Bilangan Kedua : <br>
    <input type="number" name="B" size="10"><br>

    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = (int) $_POST["A"];
    $B = (int) $_POST["B"];

    function jumlah($A, $B) {
        return $A + $B;
    }

    function kurang($A, $B) {
        return $A - $B;
    }

    function kali($A, $B) {
        return $A * $B;
    }

    function bagi($A, $B) {
        if ($B == 0) {
            return "Tidak dapat dibagi 0";
        }
        return $A / $B;
    }

    echo "<br>";
    echo "Bilangan Pertama : $A<br>";
    echo "Bilangan Kedua : $B<br><br>";

    echo "Hasil Penjumlahan 2 buah bilangan<br>";
    echo "Penjumlahan antara : $A + $B = " . jumlah($A, $B) . "<br><br>";

    echo "Hasil Pengurangan 2 buah bilangan<br>";
    echo "Pengurangan antara : $A - $B = " . kurang($A, $B) . "<br><br>";

    echo "Hasil Perkalian 2 buah bilangan<br>";
    echo "Perkalian antara : $A * $B = " . kali($A, $B) . "<br><br>";

    echo "Hasil Pembagian 2 buah bilangan<br>";
    echo "Pembagian antara : $A / $B = " . bagi($A, $B) . "<br>";
}
?>
</body>
</html>