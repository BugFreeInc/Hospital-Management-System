<!DOCTYPE>
<html>
<body>
<head>
<title>Welcome To EPR System</title>

<link rel="stylesheet" href="doctor_signup.css" media="all" />
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
<h1>Doctor Sing Up</h1>
</div>
<form  method="POST" action="">
<input type="text" placeholder="Dr Name" name="d_name" required>
<input type="text" placeholder="Govt. Reg-Number" name="d_reg" required>
<input type="text" placeholder="Qualification  " name="Qualification" required>
<input type="text" placeholder="Expertise " name="Expertise">
<input type="text" placeholder="Organization " name="Organization">
<input type="Email" placeholder="Email" name="Email" required>
<input type="password" placeholder="Password" name="Password" required> 
<input type="password" placeholder="Re-Password" name="Re-Password" required>
 <input type="submit" name="button" value="Sing Up" >
</form>

<div class="footer">


</div>
</div>
<?php  
include "connection.php";
if(isset($_POST['button'])){
$name=$_POST['d_name'];
$Reg_Number=$_POST['d_reg'];
$Qualification=$_POST['Qualification'];
$Expertise=$_POST['Expertise'];
$Organization=$_POST['Organization'];
$Email=$_POST['Email'];
$password=$_POST['Password'];
$Re_Password=$_POST['Re-Password'];
$Hashing=hash('sha256', $_POST['Password']);

if($password<>$Re_Password ){
		
		echo "<script>window.alert('Password Mismatch')</script>";
		
    
	}
else{
		$query="insert into doctor(name,RegNumber,Qualification,Expertise,Email,Organization,Password)
		values('$name','$Reg_Number','$Qualification','$Expertise','$Organization','$Email','$Hashing');";
        $result = mysqli_query($connection,$query);

        if($result){
	echo "<script>window.alert('Your Account is ready please login')</script>";
	
	}
	else{
		
		echo "<script>window.alert('Problem')</script>";
		
		}
	}

}



?>

</body>

</html>