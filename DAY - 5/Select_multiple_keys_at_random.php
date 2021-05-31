<?php

$a = array('js','php','android','java','.net','Iot','AI','ML');
$indexofarr = array_rand($a,2);

foreach ($indexofarr as $key => $value) 
{
	echo "<br/> $key - <strong>".$a[$value]."</strong>";
}

?>