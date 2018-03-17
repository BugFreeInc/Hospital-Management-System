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
        <a class="nav-link" href="Pharma_2.php">Assing Prescribe</a>
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

  <h1>Pharmacy  Name</h1>
  <p>Govt Reg. Number <br>Owner name<br>Adress</p>
<p></p>

</div>
<div class="c2">
<div class="Date">
  <p><?php
echo "Today is " . date("Y/m/d") . "<br>";
echo  date("l");
?></p>
</div>

  <p>content area</p>
</div>

<div class="slideber">
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="button">Search</button>

  
  </form>

</nav>



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