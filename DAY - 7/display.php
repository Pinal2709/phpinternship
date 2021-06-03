<?php

$conn=mysqli_connect("localhost","root","","stu");
$qry=mysqli_query($conn,"select * from studrnt1") or die(mysqli_error($conn));
echo "<table border='1'>";

echo "<tr>";
echo "<th>Uid</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile_no</th>";
echo "<th>Action</th>";
echo "<tr>";

while($row=mysqli_fetch_array($qry)){
    echo "<tr>";
    echo "<td>{$row['uid']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_moblie']}</td>";
    echo "<td><a href='delete.php?deletedid={$row['uid']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='form.php'>Add Record</a>";

?>