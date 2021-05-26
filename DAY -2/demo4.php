<?php 
$total=700;
echo "Total marks:".$total."<br>";
$get=650;
echo "Get marks:".$get."<br>";
$per=($get/7);
echo "Persentage:".$per."<br>";
if($per>80)
{
	echo "A gread...";
}
else if($per>60)
{
	echo "B gread...";
}
else if($per>50)
{
	echo "C gread...";
}
else if($per>35)
{
	echo "D gread...";
}
else
{
	echo "Fail...";
}
?>