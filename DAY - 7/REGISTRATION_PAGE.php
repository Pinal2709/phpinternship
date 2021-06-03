<?php

$con = mysqli_connect("localhost","root","","stu");

if($_POST)
{
	$a=$_POST['sid'];
	$b=$_POST['fname'];
	$c=$_POST['lname'];
	$d=$_POST['email'];
	$e=$_POST['mobile'];
	$f=$_POST['city'];
	$g=$_POST['dob'];
	$h=$_POST['address'];
	$i=$_POST['gender'];
	$j=$_POST['bld'];
	$k=$_POST['pwd'];
	$qry = "insert into student(sid,fname,lname,email,mobile,city,dob,address,gender,bld,pwd) values('{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}',
	'{$h}','{$i}','{$j}','{$k}')";
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
	<title>Registration Page</title>
<style type="text/css">
h2
{
	text-align: center;
}
.main
{
	background-color: yellow;
	color: blue;
	margin: 2em auto;
	padding: 1em;
	border : 2px solid red;
	width: 30%;
}
.main input[type="Submit"]
{
	width: 95%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;
}
.main input[type="Password"]
{
	width: 95%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;	
}
#b1
{
	width: 45%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;		
}
#a1
{
	width: 45%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;		
}
.main input[type="date"]
{
	width: 45%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;	
}
.main input
{
	width: 45%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;	
}
.main input[type="text"],.main input[type=email],.main input[type=date]
{
	width: 45%;
	border: 1px solid red;
	margin : .5em;
	padding: .5em;	
}

</style>
</head>
<body>
<div class="main">
<form method="POST">
<h2>Registration Page</h2>
<input type="text" name="sid" placeholder="Student_Id...">
<input type="text" name="fname" placeholder="Fast Name...">
<input type="text" name="lname" placeholder="Last Name...">
<input type="email" name="email" placeholder="Enter Email-Id...">
<input type="text" name="mobile" placeholder="Enter Mobile_No...">
<input type="text" name="city" placeholder="Enter City..."><br>
<input type="date" name="dob">
<textarea name="address" rows="4" cols="50" id="a1" placeholder="Enter Address...!"></textarea>
<hr>
Gender -<br>
<select name="gender" id="g1">
	<option>Female</option>
	<option>Male</option>
</select>
<hr>
Blood_group -<br>
<select name="bld" id="b1">
	<option>A+</option>
	<option>A-</option>
	<option>B+</option>
	<option>B-</option>
	<option>AB+</option>
	<option>AB-</option>
	<option>O+</option>
	<option>O-</option>
</select>
<hr>
<input type="Password" name="pwd" placeholder="Enter Password...">
<input type="Submit" name="Submit" value="Registration">
</form>
</div>
</body>
</html>