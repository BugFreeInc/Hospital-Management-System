<?php
$to = "nahianahmedcse@gmail.com.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: nahian15-5137@diu.edu.bd" . "\r\n" .
"CC: nahian15-5137@diu.edu.bd";

mail($to,$subject,$txt,$headers);
?>