<?php

$conn=mysqli_connect("localhost","root","","stu");
$qry=mysqli_query($conn,"select * from student2") or die(mysqli_error($conn));
echo "<table border='1'>";

echo "<tr>";
echo "<th>Sid</th>";
echo "<th>Fname</th>";
echo "<th>Lname</th>";
echo "<th>Email</th>";
echo "<th>Mobile_no</th>";
echo "<th>City</th>";
echo "<th>DOB</th>";
echo "<th>Gender</th>";
echo "<th>Address</th>";
echo "<th>Pwd</th>";
echo "<th>Action</th>";
echo "<tr>";

while($row=mysqli_fetch_array($qry)){
    echo "<tr>";
    echo "<td>{$row['sid']}</td>";
    echo "<td>{$row['fname']}</td>";
    echo "<td>{$row['lname']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['mobile']}</td>";
    echo "<td>{$row['city']}</td>";
    echo "<td>{$row['dob']}</td>";
    echo "<td>{$row['gender']}</td>";
    echo "<td>{$row['address']}</td>";
    echo "<td>{$row['pwd']}</td>";
    echo "<td><a href='Registration_with_them_delete.php?deletedid={$row['sid']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='REGISTRATION_PAGE.php'>Add Record</a>";

?>