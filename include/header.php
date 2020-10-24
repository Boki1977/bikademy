 <div class="header">
       
	   <?php
	   
	   if($alert=='nonelogin')
	   {
		   include("include/page/alert/login_no.php");
	   }
	   
	   if($alert=='sucesslogin')
	   {
		   include("include/page/alert/login_yes.php");
	   }
	   
	  //ukoliko je city povlači sve potkategorije koje imaju grad 1, u suprotnom 0
	   if($page=='explore_city'){
		   $grad=1;
		   $card_color="#0084c2";
		   $card_image="data/source/bg/explore.jpg";
	   }
	   if($page=='explore_regions'){
		   $grad=0;
		   $card_color="#036534";
		   $card_image="data/source/bg/regions.jpg";
	   }
	   
	   
	   if($country!='')
	   {
		   $and="AND kategorija_id=$country";
	   }
	   
	   
	   if($page!='')
	   {
		   $previous = "javascript:history.go(-1)";
			if(isset($_SERVER['HTTP_REFERER'])) {
				$previous = $_SERVER['HTTP_REFERER'];
			}
			
		if($page=='locations')
		{
		$result2 = $con->query("
		SELECT * FROM potkategorija
		WHERE id='$potkat' 
		");
							
		while ($obj2=mysqli_fetch_object($result2))
		{  
		$potkategorija_naziv=($obj2->naziv);
		}	
		}


		if($page=="indeks_user"){
			
		//provjerava kategoriju (je li grad ili regija )
		$cat=$_GET['cat'];
			
		}
			
		$margin_logo="margin-left:23%;";	
	   ?>
	   <a href="<?= $previous ?>">
		<div class="" style="float:left; margin-left:5%; margin-top:10%;">
             <img src="data/source/icons/left.png" class="img-fluid">
                       
        </div>
		</a>
		<?php
		}
		else{
			$margin_logo="margin-left:30%;";	
		}
		?>
		  <a href="<?php echo $home; ?>">
		<div class="" style="float:left; <?php echo $margin_logo; ?> margin-top:10%;">
            <img src="data/source/logo.png" class="img-fluid">
                       
        </div>
		</a>
		<div style="clear: both;"></div>
		<?php
		if($page=='locations')
		{
		?>
		<div class="" style="margin-left:5%; margin-top:10%;">
          <h3 style="color:white;"><?php echo $potkategorija_naziv; ?></h3>                       
        </div>
		<?php
		}
		if($page=='indeks_user')
		{		
		?>
		<div class="" style="margin-left:5%; margin-top:10%;">
          <h3 style="color:white;">INDEKS | </h3>                       
        </div>
		<?php 
		}
		?>
		      </div>