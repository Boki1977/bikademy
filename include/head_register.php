<?php

include ("include/page/user/post.php");

if($kcheck_num<1 && $ime!='' && $prezime !='' && $lozinka!= '' && $email !='') { 

include ("include/page/user/insert.php");
  	
   } 

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title></title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">

<?php
if($kcheck_num<1 && $ime!='' && $prezime !='' && $lozinka!= '' && $email2 !='') 
{ 
?>
<script type="text/javascript">
document.location = "index.php?alert=register_on";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
document.location = "index.php?alert=register_off";
</script>
<?php
}
?>

</head>