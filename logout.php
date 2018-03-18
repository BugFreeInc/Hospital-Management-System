<?php  
 session_start();

   $_SESSION["Doctor_id"] = "";
   $_SESSION["Doctor_Qualification"] = "";
   $_SESSION["Doctor_Name"] = "";

   $_SESSION["p_nid"] ="";
   $_SESSION["p_name"] ="";

   $_SESSION["pharmacy_id"] = "";
   $_SESSION["pharmacy_name"] = "";
   $_SESSION["pharmacy_owner"] = "";


  header("refresh:0;url=login.php");







?>