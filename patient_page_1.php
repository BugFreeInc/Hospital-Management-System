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
   $nid=$_SESSION["p_nid"];
   $name=$_SESSION["p_name"];
   
   include "connection.php";

$query=("select * from patient where nid='$nid' and name ='$name' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);


  if($row['nid']==$nid && $row['nid']!=null){


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
   
      <li class="nav-item">
        <a class="nav-link" href="patient_page_1.php">Prescription  History</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="patient_page_2.php">Buy  History</a>

      </li>
    </ul>

    <form method="POST" action="logout.php">
      
      <button type="submit" class="btn btn-light" name="">Log Out</button>
    </form>
     
  </div>

</div><!---mmanuber End-->
<div class="pharma_Name">

  <h1><?php  echo $name;  ?></h1>
  <p><?php  echo $nid;  ?></p>


</div>
<div class="c2_pharma">
<div class="Date">
  <p><?php
echo "Today is " . date("Y/m/d") . "<br>";
echo  date("l");
?></p>
</div>

 
  <?php 

//if(isset($_POST['button'])){
//$nid=$_POST['search'];
$query=("select * from prescription where PatientNID ='$nid' ");
$query1=("select * from prescription ");
$result=mysqli_query($connection,$query);
$result1=mysqli_query($connection,$query1);
//$row = mysqli_fetch_array($result);

//if ($row['PatientNID']==$nid &&$row['PatientNID']!=null) {
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
//}
?>
</div>

<div class="slideber_pharma">
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="POST">
   <input class="form-control mr-sm-2" type="search" placeholder="Prescription  History" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="button">search</button></br>
        

  
  </form>

</nav>
<?php 

if(isset($_POST['button'])){
$date=$_POST['search'];
$query=("select * from prescription where PatientNID ='$nid' and Date='$date' ");
$query1=("select * from prescription ");
$result=mysqli_query($connection,$query);
$result1=mysqli_query($connection,$query1);
//$row = mysqli_fetch_array($result);

//if ($row['PatientNID']==$nid &&$row['PatientNID']!=null) {
if ($result) {
  while ($row = mysqli_fetch_array($result)) {
  
  /*echo "<h5>Patient NID : ".$row["PatientNID"]."</h5>" ;
  echo "<h5>Disease Info : ".$row["FileOrReport"]."</h5>" ;
  echo "<h5>Prescripe By : ".$row["DrName"]."</h5>" ;
  echo "<h5>Prescripe Date : ".$row["Date"]."</h5>" ;
  echo "<h5>Medicin Name : ".$row["MedicinName"]."</h5>" ;

  */

  echo " <table border='2'>

  <tr><td>Disease Info</td> <td>Prescripe By</td><td>Medicin Name</td></tr>
   <tr><td>".$row["Disease_info"]."</td> <td>".$row["dname"]."</td><td>".$row["MedicinName"]."</td></tr>

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