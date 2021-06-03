<?php
$con=mysqli_connect("localhost","root","","stu");
$id=$_GET['deletedid'];

$q=mysqli_query($con,"delete from studrnt1 where uid='{$id}'") or die(mysqli_error($con));

if($q){
    echo "<script>alert('record deleted');window.location='display.php';</script>";
}

?>