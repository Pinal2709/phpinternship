<?php
//method 1
$a1 = range("10", "30");

foreach ($a1 as $key => $value) {
	echo "<br/> $key - $value";
}
//method 2
$a2 = range('a', 'z');
print_r($a2);

?>