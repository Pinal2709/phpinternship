<?php
$con=mysqli_connect("localhost","root","","stu");
$id=$_GET['deletedid'];

$q=mysqli_query($con,"delete from student2 where uid='{$id}'") or die(mysqli_error($con));

if($q){
    echo "<script>alert('Record deleted');window.location='Registration_with_them_display.php';</script>";
}

?>