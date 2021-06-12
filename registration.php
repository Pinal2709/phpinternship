<!DOCTYPE html>
<html>
<head>
	<title>Registration_Page</title>
<meta charset="utf-8">
<meta name="viewreport" content="width=device-width,intial-scale:1.0">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">

</head>
<body>
<div class="container">
	<div class="registration" data-id="reg">
		<h1>Registration</h1>
		<input type="text" name="fname" placeholder="FIRST_NAME">
		<input type="text" name="lname" placeholder="LAST_NAME">
		<input type="email"placeholder="EMAIL_ID">
		<input type="password" placeholder="PASSWORD">
		<input type="text" name="mobile" placeholder="MOBILE_NO">
		<input type="text" name="City" placeholder="CITY">
		<input type="date" name="DOB">
		<textarea name="Add" rows="4" cols="50" id="a1" placeholder="ADDRESS"></textarea>
		<select name="Boold_group" id="b1">
			<option>FEMALE</option>
			<option>MALE</option>
		</select>
		<button href="login.php">REGISTRATION</button>
	</div>
</div>
<div class="login">
		<div class="container">
			<i class="fa fa-user-plus" aria-hidden="true"></i>
			<h1>Welcome, Frirends...!</h1>
			<p>Enter your personal deatils and Start Ordering our Delicious food...!</p>
			<button href="main_page.php">LOG IN<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
		</div>
	</div>
</body>
</html>