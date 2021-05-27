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
.main input[type="text"],.main input[type=email]
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
<form method="POST" action="info.php">
<h2>Registration Page</h2>
<input type="text" name="fname" placeholder="First Name...">
<input type="text" name="lname" placeholder="Last Name...">
<input type="email" name="email" placeholder="Enter Email-Id...">
<input type="text" name="mobile" placeholder="Enter Mobile_No...">
<input type="text" name="City" placeholder="Enter City..."><br>
<hr>
Gender -<br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="Female">Female<br>
<hr>
Hobbies -<br>
<input type="checkbox" name="hobby[]" value="Cricket">Criket<br>
<input type="checkbox" name="hobby[]" value="Football">Football<br>
<input type="checkbox" name="hobby[]" value="Kho-kho">Kho-kho<br>
<input type="checkbox" name="hobby[]" value="Drawing">Drawing<br>
<input type="checkbox" name="hobby[]" value="Batmintan">Batmintan<br>
<hr>
<input type="Password" name="pwd" placeholder="Enter Password...">
<input type="Submit" name="Submit" value="Registration">
</form>
</div>
</body>
</html>