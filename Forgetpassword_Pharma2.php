<!DOCTYPE>
<html>
<body>
<head>
<title>Welcome To EPR System</title>

<link rel="stylesheet" href="ForgetPass_D.css" media="all" />
</head>

<div class="c1">
<div class="logo">
<div class="l1">
<strong>Electronic Patient Record System</strong>
<p>Emergency no:...........</p>
</div>
<div class="l2">

<img src="2.jpg" width="60" height="60">
<div class="menuber">


<ul id="menu">

  <li><a href="index.php">HOME</a></li>
  <li><a href="service.php">SERVICES</a></li>
  <li><a href="login.php">LOG IN</a></li>
<li><a href="usersingup.php">SING UP</a></li>

  <li><a href="about.php">ABOUT</a></li>
  <li><a href="help.php">Help</a></li>
    
  
</ul>
</div>

</div>



</div>
<div class="h1">
<h1>Forget Password Pharmacist</h1>
</div>
<form method="POST" action="">


<input type="password" placeholder="New Password" name="password">
<input type="password" placeholder="Re-enter Password" name="re_password">
<input type="submit" value="Update" name="button">

</form>

<div class="footer">


</div>
</div>
<?php
session_start();
include "connection.php"; 
if (isset($_POST['button'])) {
	$password=$_POST['password'];
	$re_password=$_POST['re_password'];
	$hashing=hash('sha256', $_POST['password']);
	$email=$_SESSION["email"];
	$Reg_Number=$_SESSION["Reg_Number"]; 
if($password==$re_password){
 $query=("update pharmacy set Password='$hashing' WHERE Email='$email' and RegNumber='$Reg_Number'");
$result=mysqli_query($connection,$query);


if($result){
	echo "<script>window.alert('PassWord Changed')</script>";
	header("refresh:0;url=login.php");	
	}
	else{
		echo "<script>window.alert('PassWord Mismatch')</script>";
		header("refresh:0;url=login.php");
		
		}



}
else{
echo "<script>window.alert(' Both PassWord not same')</script>";

}

}



 ?>

</body>

</html>