<?php
$a=0;
$b=1;

// fibbonaci
echo $a;
echo $b;
for($i=0;$i<=5;$i++)
{
$sum=$a+$b;
echo $sum;
$a=$b;
$b=$sum;
}
?>
