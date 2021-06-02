<?php

$con = mysqli_connect("localhost","root","","stu");

if($_POST)
{
	$name = $_POST['text1'];
	$gender = $_POST['text2'];
	$moblie = $_POST['text3'];
	$qry = "insert into studrnt1(user_name,user_gender,user_moblie) values('{$name}','{$gender}','{$moblie}')";
	$qry1 = mysqli_query($con,$qry) or die("Error".mysqli_error($con));

	if($qry1)
	{
		echo "<script>alert('Record Add sucessfully...!');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST">
	NAME - 
	 <input type="text" name="text1" placeholder="Student_Id..."><br><br>
	GENDER -
	<select name="text2">
	<option>Male</option>
	<option>FeMale</option>
	</select><br><br>
	MOBLE - 
	<input type="text" name="text3"><br><br>
	<input type="submit">
</form>
</body>
</html>