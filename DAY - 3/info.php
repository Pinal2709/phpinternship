<?php
if(isset($_POST['Submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$City = $_POST['City'];
	$gender = $_POST['gender'];
	$hobby = $_POST['hobby'];
	$pwd = $_POST['pwd'];
}

echo "First name - $fname<br><br>";

echo "Last name - $lname<br><br>";

echo "Email_Id - $email<br><br>";

echo "Mobile_no - $mobile<br><br>";

echo "City - $City<br><br>";

echo "Gender - $gender<br><br>";

echo "Password- $pwd<br><br>";

echo "Hobbie -";
$i = 0;
while ($i<sizeof($hobby)) {
	echo $hobby[$i]."<br>";
	$i++;
}
?>
