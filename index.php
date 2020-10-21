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
include("include/head.php");
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
        
	   <?php
	   //rutiranje
	   
	   if($page==''){
		   
		   include("include/page/index/index.php");
	   }
	   
	   if($page=='explore_city' || $page=='explore_regions'){
		   
		   include("include/page/explore/index.php");
	   }
	   
	   if($page=='locations'){
		   
		   include("include/page/explore/list.php");
	   }
	   
	    if($page=='lokacija'){
		   
		   include("include/page/explore/lokacija.php");
	   }
	   
	    if($page=='galerija'){
		   
		   include("include/page/explore/galerija.php");
	   }
	   
	   if($page=='add_exam'){
		   
		   include("include/page/exam/add_exam.php");
	   }
	 
	 
		if($page=='add_on'){
		   
		   include("include/page/exam/on_location.php");
	   }
	   
	   if($page=='add_off'){
		   
		   include("include/page/exam/add_photo.php");
	   }
	   if($page=='exam_confirm'){
		   
		   include("include/page/exam/exam_confirm.php");
	   }
	  
	   ?>
		
		
		   

		
		
        </div>

        <!-- footer and footer card-->
       
</div>    
<!-- end of page content-->
    
        

    
 


    
</div>    


<?php
include("include/footer_js.php");
?>
</body>
