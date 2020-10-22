<?php
include("login_check.php");
$page=$_GET['page'];
$potkat=$_GET['potkat'];
$country=$_GET['cat'];
$lokacija_id=$_GET['lokacija_id'];
$alert=$_GET['alert'];
$prijava_lat=$_GET['lat'];
$prijava_lang=$_GET['lang'];

		$result = $con->query("
		SELECT * FROM lokacija
		WHERE id='$lokacija_id' 
		");
							
		while ($obj=mysqli_fetch_object($result))
		{  
		
		include ("include/libs/lokacija.php");
		}

?>
<!DOCTYPE HTML>
<html lang="en">
<?php
if($page!='add_on')
{
include("include/head.php");
}
else{
include("include/head_polaganje.php");
}
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
        	<div class="card card-style" style="margin-top: 30%;">
                  <h4 style="text-align: center; margin-top:8%; margin-bottom:8%;"><?php echo $naziv; ?></h4>          
			</div> 
	  <iframe src="polaganje_lokacije_frame.php?lokacija_id=<?php echo $lokacija_id; ?>" frameBorder="0" onload="this.width=screen.width;this.height=screen.height;" title="IMap" style="margin-top:0%;"></iframe>
		
		   

		
		
        </div>

        <!-- footer and footer card-->
       
</div>    
<!-- end of page content-->
    
        

    
 


    
</div>    


<?php
include("include/footer_js.php");
?>
</body>
