<?php 

$myArray = array("A", "B", "C", "D", "E"); 
shuffle($myArray);          //Shuffle the array 
foreach ($myArray as $key => $value) 
{ 
	echo "<br /> $value "; 
}
