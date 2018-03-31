<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">

    <title>Pharmacy Page</title>
  </head>
  <body>
    <?php  
   session_start();
   $pharmacy_id=$_SESSION["pharmacy_id"] ;
   $pharmacy_name=$_SESSION["pharmacy_name"];
   $pharmacy_owner=$_SESSION["pharmacy_owner"];
   include "connection.php";

$query=("select * from pharmacy where RegNumber='$pharmacy_id' and name ='$pharmacy_name' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);


  if($row['RegNumber']==$pharmacy_id && $row['RegNumber']!=null){


  }
  else{

    header("refresh:0;url=login.php");
  }


   ?>
   
<div class=container>

<div class="manuber">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    



    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Pharma_1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pharma_2.php">Sell Medicine</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pharma_3.php">Sell  History</a>

      </li>
    </ul>

    <form method="POST" action="logout.php">
      <button type="submit" class="btn btn-light" name="">Log Out</button>
    </form>
     
  </div>

</div><!---mmanuber End-->
<div class="pharma_Name">

  <h1><?php  echo $pharmacy_name;  ?></h1>
  <p><?php  echo $pharmacy_id;  ?></p>
<p><?php  echo $pharmacy_owner;  ?></p>
</div>
<div class="c2">
<div class="Date">
  <p><?php
echo "Today is " . date("Y/m/d") . "<br>";
echo  date("l");
?></p>
</div>
<center><h4>Prescription</h4></center>
  
  <?php 

if(isset($_POST['button'])){
$nid=$_POST['search'];
$query=("select * from prescription where PatientNID ='$nid' ");
$query1=("select * from prescription ");
$result=mysqli_query($connection,$query);


if ($result) {
  while ($row = mysqli_fetch_array($result)) {
  
  /*echo "<h5>Patient NID : ".$row["PatientNID"]."</h5>" ;
  echo "<h5>Disease Info : ".$row["FileOrReport"]."</h5>" ;
  echo "<h5>Prescripe By : ".$row["DrName"]."</h5>" ;
  echo "<h5>Prescripe Date : ".$row["Date"]."</h5>" ;
  echo "<h5>Medicin Name : ".$row["MedicinName"]."</h5>" ;

  */

  echo " <table border='2'>

  <tr> <td>Patient's NID</td><td>Disease Info</td> <td>Prescripe By</td><td>Prescripe Date</td><td>Medicine Name</td></tr>
   <tr> <td>".$row["PatientNID"]."</td><td>".$row["Disease_info"]."</td> <td>".$row["dname"]."</td><td>".$row["Date"]."</td><td>".$row["MedicinName"]."</td></tr>

</table>
<br>
  ";
  }
  
}
else{
  echo "<h6 >NO RECORD FOUND</h6>";
}
}
?>
</div>

<div class="slideber">
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="button">Search</button>

  
  </form>

</nav>
<?php 

if(isset($_POST['button'])){
$nid=$_POST['search'];
$query=("select * from patient where nid ='$nid' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);
if ($row['nid']==$nid &&$row['nid']!=null) {
  echo "<h5>Patient Name : ".$row["name"]."</h5>" ;
  echo "<h5>Patient NID : ".$row["nid"]."</h5>" ;
}
else{
  echo "<h6 >NO RECORD FOUND</h6>";
}
}
?>


</div><!---slide_ber End-->

</div>    <!---container End-->

</nav>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>