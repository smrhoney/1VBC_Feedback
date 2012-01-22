<?php

ob_start();
include_once("index.html");
$message=ob_get_contents();
ob_end_clean();


 $from="ammar.mancolt@gmail.com";
 $to="ammar.mancolt@gmail.com";
 $subject="Feedback Form";
$headers="MIME-Version: 1.0rn";
$headers .= "Content-type: text/html; charset=iso-8859-1rn";
$headers  .= "From: $from\r\n";

mail($to,$subject,$message,$headers);
?>
