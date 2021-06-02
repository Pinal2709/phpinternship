<?php
$con = mysqli_connect("localhost","root","","stu");

if($_POST)
{
  $a=$_POST['sid'];
  $b=$_POST['fname'];
  $c=$_POST['lname'];
  $d=$_POST['email'];
  $e=$_POST['mobile'];
  $f=$_POST['city'];
  $g=$_POST['dob'];
  $h=$_POST['gender'];
  $i=$_POST['address'];
  $J=$_POST['pwd'];
  $qry = "insert into student2(sid,fname,lname,email,mobile,city,dob,gender,address,pwd) values('{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}',
  '{$h}','{$i}','$J')";
  $qry1 = mysqli_query($con,$qry) or die("Error".mysqli_error($con));

  if($qry1)
  {
    echo "<script>alert('Record Add sucessfully...!');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<body>
<meta charset="utf-8">
<meta name="description" content="This Is a page practice about HTML 5 inputs & forms">
<style type="text/css">
  body{
  font-family:calibri;
  padding:0;
  margin:0;
  margin:;
  padding:;
  background-color:#9b6eff;
}

.loginBox{
 margin:1% auto 0% auto;
 padding:5px 60px 20px 60px;
 width:40%;
 height:50%;
 box-sizing:border-box;
 background:rgba(0,0,0,.5);
}

h2{
 margin:0;
 padding:0 0 20px;
 text-align:center;
 color:violet;

}

.loginBox p{
 margin:0;
 padding:0;
 font-weight:bold;
 color:#fff;
}

.loginBox input{
 width:100%;
 height:20px;
 margin:0 0 20px 0;
}

.loginBox input[type="text"],
.loginBox input[type="password"],
.loginBox input[type="email"],
.loginBox input[type="date"]{
 border:none;
 border-bottom:1px solid #fff;
 background:transparent;
 outline:none;
 color:#fff;
 font-size:14px;
 text-align:center;
}

::placeholder{
 color: white;
 opacity:0.1;
 text-align:center;
}

.loginBox input[type="Submit"]{
 border:1px solid;
 height:40px;
 color:violet;
 background-color:transparent;
}

.loginBox input[type="Submit"]:hover{
 color:pink;
 border:2px solid;
}

form a{
 color:violet;
 text-decoration:none;
}
</style>
<title>Input & Forms</title>
</head>
<body>
 <header>

 </header>
 <main>
  <div class="loginBox">
   <h2>Sign Up</h2>
   
  <form method="POST">
   <p>Student_Id</p>
    <input type="text" name="sid" placeholder="Student_Id...">
   <p>First Name</p>
    <input type="text" name="fname" placeholder="Fast Name...">
    <p>Last Name</p>
    <input type="text" name="lname" placeholder="Last Name...">
    <p>Eamil_Id</p>
    <input type="email" name="email" placeholder="Enter Email-Id...">
    <p>Mobile_No</p>
    <input type="text" name="mobile" placeholder="Enter Mobile_No...">
    <p>City</p>
    <input type="text" name="city" placeholder="Enter City...">
    <p>Date Of Birth</p>
    <input type="date" name="dob">
    <p>Gender</p>
    <input type="text" name="gender" placeholder="Enter Gender...">
    <p>Address</p>
    <input type="text" name="address" placeholder="Address">
    <p>Password<p>
    <input type="Password" name="pwd" placeholder="Enter Password...">
    <input type="Submit" name="Submit" value="Registration">
  
  <p>Already have an account? <a href="#">Sign In</a></p>
  </form>
  </div>
 </main>
</body>
</html>

