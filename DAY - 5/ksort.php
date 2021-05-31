<?php

$arr = array( 
	"a" => "Apple", 
	"b" => "Banana", 
	"m" => "Mango"); 
ksort($arr); 
foreach ($arr as $key => $value) 
{ 
	echo "<br />$key - $value "; 
}


?>