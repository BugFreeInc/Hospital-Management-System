<!DOCTYPE>
<html>
<body>
<head>
<title>Welcome To EPR System</title>

<link rel="stylesheet" href="Doctorlogin.css" media="all" />
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
  <li><a href="#news">SERVICES</a></li>
  <li><a href="login.php">LOG IN</a></li>
<li><a href="usersingup.php">SING UP</a></li>

  <li><a href="#about">ABOUT</a></li>
  <li><a href="#about">CONTACT</a></li>
    
  
</ul>
</div>

</div>



</div>
<div class="h1">
<h1>Doctor Log In</h1>
</div>
<form method="POST" action="">
<input type="text" placeholder="Reg-Number" name="d_reg">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Log In" name="button">
<p><a href="ForgetPass_D.php"><strong>Forget Password ?</strong></a></p>
</form>

<div class="footer">


</div>
</div>

<?php 
include "connection.php";
session_start();
if(isset($_POST['button'])){


    $Reg_Number=$_POST['d_reg'];
	$password=hash('sha256', $_POST['password']);

$query=("select * from doctor where RegNumber='$Reg_Number' and Password ='$password' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);

if($row['RegNumber']==$Reg_Number && $row['Password']==$password && $row['RegNumber']!=null){

	 $_SESSION["Doctor_id"] = $row['RegNumber'];
	 $_SESSION["Doctor_Qualification"] = $row['Qualification'];
	 $_SESSION["Doctor_Name"] = $row['name'];

	echo "<script>window.alert('Well Come ')</script>";
	header("refresh:0;url=Doctorpage_1.php");
	}
	else{
		echo "<script>window.alert('Password Mismatch Or You Account is not Created')</script>";
		
		}



}

 ?>
</body>

</html>