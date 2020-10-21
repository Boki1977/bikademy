<?php
include("login_check.php");
$page=$_GET['page'];
$potkat=$_GET['potkat'];
$country=$_GET['cat'];
$lokacija_id=$_GET['lokacija_id'];
$alert=$_GET['alert'];
$prijava_lat=$_GET['lat'];
$prijava_lang=$_GET['lang'];

?>
<!DOCTYPE HTML>
<html lang="en">
<?php

include("include/head_polaganje.php");

?>
    
<body class="theme-light" data-highlight="blue2">
    
<?php
include("include/preloader.php");
?>
<div id="page">
    
    <!-- header and footer bar go here-->
   
<?php
include("include/footer.php");
?>
    
    <div class="page-content">
	
	
        
       <?php
	  
	   include("include/header.php");
	  
	   
	   ?>
        
	        <div class="static-notification bg-blue-dark">
                  <div id="dist_div" style="color: white;"></div>
                    </div>  
        
        
            <div id="dist_div"></div>
            <div id="map-canvas"/>
			
			
		
		   

		
		
        </div>

        <!-- footer and footer card-->
       
</div>    
<!-- end of page content-->
    
        

    
 


    
</div>    


<?php
include("include/footer_js.php");
?>
</body>
