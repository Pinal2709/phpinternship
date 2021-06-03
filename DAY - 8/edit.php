<?php
$conn=mysqli_connect("localhost","root","","stu");

$editid = $_GET['id'];

$editq = mysqli_query($conn,"select * from studrnt1 where uid ='{$editid}'") or die(mysqli_error($conn));

$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST)
{
	$name = $_POST['text1'];
	$gender = $_POST['text2'];
	$moblie = $_POST['text3'];

	$uq = mysqli_query($conn,"update studrnt1 set user_name='{$name}',user_gender='{$gender}',user_moblie='{$moblie}' where 
		uid='{$editid}'") or die (mysqli_error($conn));

	if($uq)
	{
		echo "<script>alert('Record Update');window.location='display.php';</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>edit_page</title>
</head>
<body>
<form method="POST">
	NAME - 
	 <input type="text" name="text1" value="<?php echo $editdata['user_name']; ?>" placeholder="Student_Id..."><br><br>
	GENDER -
	<input type="radio" name="text2"  <?php if($editdata['user_gender']=="FeMale") {echo "checked";} ?> value="Female">FeMale
	<input type="radio" name="text2"  <?php if($editdata['user_gender']=="Male") {echo "checked";} ?> value="Male">Male
	<br><br>
	MOBILE - 
	<input type="text" value="<?php echo $editdata['user_moblie']; ?>" name="text3"><br><br>
	<input type="submit"><br><br>
</form>
</body>
</html>