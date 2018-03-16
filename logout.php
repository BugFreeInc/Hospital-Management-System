<?php  
 session_start();

   $_SESSION["Doctor_id"] = "";
   $_SESSION["Doctor_Qualification"] = "";
   $_SESSION["Doctor_Name"] = "";
  header("refresh:0;url=login.php");







?>