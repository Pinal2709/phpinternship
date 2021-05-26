<?php
$a=10;
echo "<b><u>Before type casting -</u></b><br>";
echo "Type of a : ".gettype($a)."<br><br>";
echo "<b><u>After type casting -</u></b><br>";
$a=(string)"10";
echo "Type of a :".gettype($a)."<br>";
?>