<?php

//factorial

function fact($num)
{
	$facto = 1;
	for($i=1;$i<=$num;$i++)
	{
		$facto = $facto * $i;
	}
	return $facto;
}

$num = 10;
$factorial = fact($num);
echo "Factorial - $factorial";

?>