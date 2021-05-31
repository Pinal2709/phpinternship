<?php

$arr = array( 
	"a" => "Apple", 
	"b" => "Banana", 
	"m" => "Mango"); 
krsort($arr); 
foreach ($arr as $key => $value) 
{ 
	echo "<br />$key - $value "; 
}


?>