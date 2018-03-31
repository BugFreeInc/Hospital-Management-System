<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">

    <title>Doctor Page</title>
  </head>
  <body>
    <?php  
   session_start();
   $Doctor_Name=$_SESSION["Doctor_Name"];
   $Doctor_id=$_SESSION["Doctor_id"];
   $Doctor_Qualification=$_SESSION["Doctor_Qualification"];
   include "connection.php";

$query=("select * from doctor where RegNumber='$Doctor_id' and name ='$Doctor_Name' ");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_array($result);


  if($row['RegNumber']==$Doctor_id && $row['RegNumber']!=null){


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
    


    <!---<a class="navbar-brand" href="#">Hidden brand</a>-->

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="doctorpage_1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doctorpage_2.php">Genaral Prescribe</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doctorpage_3.php">Patient History</a>
      </li>
      
    </ul>
    <form method="" action="logout.php"><button type="submit" class="btn btn-light" name="logout">Log Out</button></form>
    
  </div>
  </nav>
</div><!---mmanuber End-->
<div class="Doctor_Name">
  <h1><?php  echo $Doctor_Name;  ?></h1>
  <p><?php  echo "Reg. No:". $Doctor_id;  ?></p>
<p><?php  echo $Doctor_Qualification;  ?></p>
</div>
<div class="c2">
<div class="Date">
  <p><?php
echo "Today is " . date("Y/m/d") . "<br>";
echo  date("l");
?></p>
</div>

<form method="POST" action="">
  <table align="center" border="2" bgcolor="  #E6E6FA">
 
<tr align="center">
    <th colspan="7">Assing Medicin</th>
   
  </tr>
  <tr><th>Patient ID</th><th colspan="2"><input type="text" name="" size="35" required></th><th>Disease Info</th><th colspan="3"><input type="text" name="" size="45" required></th></tr>
  <tr><th>Medicin 1</th><td><input type="text" name="" size="" required></td><th align="center">Dose Per Day</th><td><input type="text" name="" size="" required></td><td>
  <select name="inaday">
  <option >After Eating</option>
  <option >Before Eating</option>
  
   </select>
   </td>
   <th>Duration</th><td><input type="text" name="" size="" required></td></tr>
<tr><th>Medicin 2</th><td><input type="text" name="" size="" ></td><th>Dose Per Day</th><td><input type="text" name="" size="" ></td><td><select name="inaday">
    <option >After Eating</option>
  <option >Before Eating</option>
   </select></td><th>Duration</th><td><input type="text" name="" size="" ></td></tr>
  <tr><th>Medicin 3</th><td><input type="text" name="" size="" ></td><th>Dose Per Day</th><td><input type="text" name="" size="" ></td><td><select name="inaday">
    <option >After Eating</option>
  <option >Before Eating</option>

   </select></td><th>Duration</th><td><input type="text" name="" size="" ></td></tr>
  <tr><th>Medicin 4</th><td><input type="text" name="" size="" ></td><th>Dose Per Day</th><td><input type="text" name="" size="" ></td><td><select name="inaday">
    <option >After Eating</option>
  <option >Before Eating</option>
   </select></td><th>Duration</th><td><input type="text" name="" size="" ></td></tr>
  <tr><th>Medicin 5</th><td><input type="text" name="" size="" ></td><th>Dose Per Day</th><td><input type="text" name="" size="" ></td><td><select name="inaday">
    <option >After Eating</option>
  <option >Before Eating</option>
   </select></td><th>Duration</th><td><input type="text" name="" size="" ></td></tr>
  <tr><th>Description</th><th colspan="6"><input type="text" name="" size="111" ></th></tr>

    <tr align="center"><th colspan="7"><input type="submit" name="ADD" value="ADD"></th></tr>
  
  
</table>
</form>
<?php 
if(isset($_POST['ADD'])){
$nid=$_POST['nid'];
$Medicin=$_POST['Medicin'];
$Doge=$_POST['Doge'];
$inaday=$_POST['inaday'];
$Duration=$_POST['Duration'];
$Eat=$_POST['Eat'];
$file=$_POST['file'];
$date=date("Y/m/d");
$DrName=$Doctor_Name;

$query="insert into prescription(PatientNID,MedicinName,DogePerDay,TimeinaDay,Duration,BeforAfterEat,FileOrReport,Date,DrName)
    values('$nid','$Medicin','$Doge','$inaday','$Duration','$Eat','$file','$date','$DrName');";
        $result = mysqli_query($connection,$query);
if($result){
  echo "<script>window.alert('Data Added')</script>";
  
  }
  else{
         echo "<script>window.alert('Data not Added')</script>";
  }


}
?>
</div>

<div class="slideber">
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="POST">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
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






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>