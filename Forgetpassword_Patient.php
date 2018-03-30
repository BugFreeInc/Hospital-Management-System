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
<h1>Forget Password Patient </h1>
</div>
<form method="POST" action="">
<input type="text" placeholder="NID" name="nid">
<input type="text" placeholder="Email" name="email">
<input type="submit" value="Submit" name="button">
</form>

<div class="footer">


</div>
</div>
<?php  

session_start();
include "connection.php";
if(isset($_POST['button'])) {
   $nid=$_POST['nid'];
   $email=$_POST['email'];
   $_SESSION["email"] = $email;
     $_SESSION["nid"] = $nid;

 $query=("select * from patient where nid='$nid' and email ='$email' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);

if($row['nid']==$nid && $row['email']==$email && $row['nid']!=null){
	echo "<script>window.alert('Well Come ')</script>";
	header("refresh:0;url=Forgetpassword_Patient2.php");

	}
	else{
		echo "<script>window.alert('Email Mismatch Or You Account is not Created')</script>";
		
		}


}



?>

</body>

</html>