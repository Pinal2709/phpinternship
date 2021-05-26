<?php

function primecheck($num)
{
	if($num == 1)
		return 0;
	for($i = 2;$i <= $num/2;$i++)
	{
		if($num % $i == 0)
			return 0;
	}

	return 1;
}

$num = 31;
$flag = primecheck($num);
if($flag == 1)
	echo "Prime";
else
	echo "No Prime";