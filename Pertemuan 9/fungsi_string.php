<?php
$teks = "  belajar PHP pemrograman web  ";

echo "Teks asli: [$teks]<br>";
echo "strlen: " . strlen($teks) . "<br>";
echo "strtoupper: " . strtoupper($teks) . "<br>";
echo "strtolower: " . strtolower($teks) . "<br>";
echo "ucfirst: " . ucfirst(trim($teks)) . "<br>";
echo "ucwords: " . ucwords(trim($teks)) . "<br>";
echo "ltrim: [" . ltrim($teks) . "]<br>";
echo "rtrim: [" . rtrim($teks) . "]<br>";
echo "trim: [" . trim($teks) . "]<br>";
echo "substr: " . substr(trim($teks), 0, 7) . "<br>";
echo "strpos 'PHP': " . strpos($teks, "PHP") . "<br>";
echo "str_replace: " . str_replace("PHP", "Laravel", $teks) . "<br>";
echo "strrev: " . strrev(trim($teks)) . "<br>";
?>