<!DOCTYPE>
<html>
<body>
<head>
<title>Welcome To EPR System</title>

<link rel="stylesheet" href="Regipatient.css" media="all" />
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
  <li><a href="help.php">HELP</a></li>
    
  
</ul>
</div>

</div>



</div>
<div class="h1">
<h1>Pharmacy Sing Up</h1>
</div>
<form method="POST" action="">
<input type="text" placeholder="Name" name="name">
<input type="text" placeholder="User Name" name="username" required>
<input type="email" placeholder="Email" name="email" required>
<input type="text" placeholder="NID Number" name="nid" required>
<input type="text" placeholder="Phone Number" name="Phoneno">
<input type="password" placeholder="Password" name="password" required>
<input type="password" placeholder="Re-Password" name="Re-Password" required>
<input type="submit" value="Sing Up" name="button">

</form>

<div class="footer">


</div>
</div>
<?php 
include "connection.php";

if(isset($_POST['button'])){
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$nid=$_POST['nid'];
$Phoneno=$_POST['Phoneno'];
$password=$_POST['password'];
$Re_Password=$_POST['Re-Password'];
$Hashing=hash('sha256', $_POST['password']);


if($password<>$Re_Password ){
		
		echo "<script>window.alert('Password Mismatch')</script>";
		
    
	}

else{
		$query="insert into patient(name,username,email,nid,phone_no,Password)
		values('$name','$username','$email','$nid','$Phoneno','$Hashing');";
        $result = mysqli_query($connection,$query);

        if($result){
	echo "<script>window.alert('Your Account is ready please login')</script>";
	 header("refresh:0;url=login.php");
	
	}
	else{
		
		echo "<script>window.alert('Problem')</script>";
		
		}


}

}
 ?>

</body>

</html>