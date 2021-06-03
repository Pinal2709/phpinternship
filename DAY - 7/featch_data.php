<?php
//DB Connection
$con = mysqli_connect("localhost","root","","stu");
//Query
$q = mysqli_query($con,"select * from studrnt1") or die("Error".mysqli_error($con));
//fetch data as numerical array
$row = mysqli_fetch_row($q);

print_r($row);

echo $row[0].$row[1].$row[2].$row[3];
//Numerical and Associative 
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);

echo $row[0].$row[1].$row[2].$row[3];
echo $row['uid'].$row['user_name'].$row['user_gender'].$row['user_moblie'];
?>