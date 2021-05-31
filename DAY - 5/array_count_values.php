<?php

$a = array('js','Iot','android','java','.net','Iot','AI','ML');
$na = array_count_values($a);

foreach ($na as $key => $value) {
	echo "<br/> $key - <strong>$value</strong>";
}

?>