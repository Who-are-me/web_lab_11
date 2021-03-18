<?php
 
$a = $_POST["a"];
$b = $_POST["b"];

$sum = $a + $b;
$riz = $a - $b;
$dob = $a * $b;
$dil = $a / $b;

echo ("<font color=#FF0000><h2>Математичний приклад</h2></font>");
echo ("a =$a, b =$b<br><br>");

echo "sum= $sum<br>";
echo "riz= $riz<br>";
echo "dob= $dob<br>";
echo "dil= $dil<br>";

 
?>
