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
<h1>Pharmacy Sing Up</h1>
</div>
<form method="POST" action="">
<input type="text" placeholder="Pharmacy Name" name="p_name">
<input type="text" placeholder="Govt. Reg-Number" name="p_reg" required>
<input type="text" placeholder="Owners Name" name="Owner_name">
<input type="text" placeholder="Address " name="address">

<input type="Email" placeholder="Email" name="Email" required>
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
 $name=$_POST['p_name'];
 $Reg_Number=$_POST['p_reg'];
 $Owner_name=$_POST['Owner_name'];
 $address=$_POST['address'];
 $Email=$_POST['Email'];
 $password=$_POST['password'];
$Re_Password=$_POST['Re-Password'];

$Hashing=hash('sha256', $_POST['password']);

if($password<>$Re_Password ){
		
		echo "<script>window.alert('Password Mismatch')</script>";
		
    
	}

else{
		$query="insert into pharmacy(name,RegNumber,owner,address,Email,Password)
		values('$name','$Reg_Number','$Owner_name','$address','$Email','$Hashing');";
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