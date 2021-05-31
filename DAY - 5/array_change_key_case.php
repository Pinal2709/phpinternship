<?php 
$arr = array( "A" => "apb", "B" => "pqr", "C" => "xyz"); 
$uppercase = array_change_key_case($arr,CASE_UPPER); 
print_r($uppercase); 
?>
