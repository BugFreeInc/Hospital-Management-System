<!DOCTYPE>
<html>
<body>
<head>
<title>Welcome To EPR System</title>

<link rel="stylesheet" href="Regipharmacy.css" media="all" />
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
<h1>Pharmacy Log In</h1>
</div>
<form method="POST" action="">
<input type="text" placeholder="Reg-Number" name="Reg-Number">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Log In" name="button">
<p><a href="Forgetpassword_Pharma.php"><strong>Forget Password ?</strong></a></p>
</form>

<div class="footer">


</div>
</div>
<?php  
session_start();
include "connection.php";
if(isset($_POST['button'])){


    $Reg_Number=$_POST['Reg-Number'];
	$password=hash('sha256', $_POST['password']);

$query=("select * from pharmacy where RegNumber='$Reg_Number' and password ='$password' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);

if($row['RegNumber']==$Reg_Number && $row['password']==$password && $row['RegNumber']!=null){
	$_SESSION["pharmacy_id"] = $row['RegNumber'];
	 $_SESSION["pharmacy_name"] = $row['name'];
	 $_SESSION["pharmacy_owner"] = $row['owner'];

	echo "<script>window.alert('Well Come ')</script>";
	header("refresh:0;url=Pharma_1.php");
	}
	else{
		echo "<script>window.alert('Password Mismatch Or You Account is not Created')</script>";
		
		}



}





?>

</body>

</html>