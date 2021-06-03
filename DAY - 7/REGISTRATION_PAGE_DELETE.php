<?php
$con=mysqli_connect("localhost","root","","stu");
$id=$_GET['deletedid'];

$q=mysqli_query($con,"delete from student where uid='{$id}'") or die(mysqli_error($con));

if($q){
    echo "<script>alert('Record deleted');window.location='REGISTRATION_PAGE_DISPLAY.php';</script>";
}

?>