<?php 
$arr = array("i"=>"python","want"=>"js","learn"=>"android"); 
$myarr = array_values($arr); 
foreach($myarr as $key => $value) 
{ 
	echo " <br />$key - $value"; 
} 
?>
