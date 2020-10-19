<?php


$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$image_path="http://bikeapp.info/";
$path="http://localhost/bicikademija/site";
$home="index.php";
  $danas_datum = date("Y-m-d", strtotime("+0 day"));
  $tjedan_datum = date("Y-m-d", strtotime("-7 day"));
  $mjesec_datum = date("Y-m-d", strtotime("-30 day"));
  
  $danas = date("Y-m-d H:i:s", strtotime("+0 hour"));
 
 $danas_vrijeme = date("H:i:s");  
 
 $dan = date("d", strtotime("+0 day"));
 $mjesec = date("m", strtotime("+0 day"));
 $godina = date("Y", strtotime("+0 day"));
 $sat = date("H", strtotime("+0 day"));
 $minuta = date("i", strtotime("+0 day"));
 $sekunda = date("s", strtotime("+0 day"));
 
$trenutni_datum="$dan.$mjesec.$godina $danas_vrijeme";
 
 
 
 
$user="root"; 
$pasword=""; 
$database="bikeapp";





$con=mysqli_connect("localhost",$user,$pasword,$database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
   
$charset="UTF-8";

$con->set_charset('utf8');
  
$jezik="HR";


?>