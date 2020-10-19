
       <?php
	      
		$result = $con->query("
		SELECT * FROM lokacija
		WHERE id='$lokacija_id' 
		");
							
		while ($obj=mysqli_fetch_object($result))
		{  
		
		include ("include/libs/lokacija.php");
		}
		
		$result2 = $con->query("
		SELECT * FROM potkategorija
		WHERE id='$id_potkategorija' 
		");
							
		while ($obj2=mysqli_fetch_object($result2))
		{  
		$potkategorija_naziv=($obj2->naziv);
		}
		
		$result3 = $con->query("
		SELECT * FROM kategorija
		WHERE id='$id_kategorija' 
		");
							
		while ($obj3=mysqli_fetch_object($result3))
		{  
		$kategorija_naziv=($obj3->naziv);
		}
		
		
		//ako je ispit položen definira passed, ako nije definira pass your exame
		
		$result4 = $con->query("
		SELECT * FROM indeks
		WHERE kod_lokacije='$kod_lokacije'
		AND kod_korisnika='$k_kod_korisnika'
		AND status_polaganja >0;
		");
		
		$status_num=mysqli_num_rows($result4);
		
		if($status_num <1)
		{
		$pass_link='<div style="position:absolute; right:-2px; bottom:-2px;"><img src="data/source/icons/pass.png" class="img-fluid"></div>';	
			
		}
		else{
			$pass_link='<div style="position:absolute; right:-2px; bottom:-2px;"><img src="data/source/icons/passed.png" class="img-fluid"></div>';
		}
	   ?>
        
        <div class="card card-style" style="margin-top: 30%; position:relative;">
          <img src="<?php echo $fotka_potkat; ?>" class="img-fluid">
        <?php
		echo $pass_link;
		?>
        </div> 
		
		
		
		<div style="float:left; width:60%; margin-left:5%;">
		<?php echo $potkategorija_naziv; ?><br>
		Country: <?php echo $kategorija_naziv; ?>
		</div>
		
		<?php
		if($video!='')
		{
			$foto_float="right";
			$margin="margin-right:5%;";
		}	
		else{
			$foto_float="left";
			$margin="";
		}
		?>
		
		<?php
		if($fotografija!='')
		{
		?>
		<a href="?page=galerija&lokacija_id=<?php echo $id; ?>"><div style="float:<?php echo $foto_float; ?>; width:13%;"><img src="data/source/icons/photo.png" width="80%"></div></a>
		<?php
		}
		?>
		
		<?php
		if($video!='')
		{
		?>
		<a href="#" data-menu="menu-video"><div style="float:right; width:12%; margin-right:4%;"><img src="data/source/icons/video.png" width="90%"></div></a>
		<?php
		}
		?>
		   
		<div style="clear:both"></div>
		
		<div style="margin-left:5%; margin-top:5%;"><h3 style="color:#0b437a;"><?php echo $naziv; ?></hr></div>
	
	
		<div class="responsive-iframe add-iframe" style="margin-left:5%; margin-right:5%;">
        <iframe class="location-map" src='https://maps.google.com/?ie=UTF8&amp;ll=<?php echo $geo_lokacija; ?>&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed'></iframe>
        </div>
				
         <div style="margin-left:5%; margin-right:5%; margin-top:5%">
		<?php echo $opis; ?>
		 </div>		 
       
					
         <div id="menu-video" class="menu menu-box-modal rounded-m" data-menu-width="95%">
        <div class='responsive-iframe max-iframe'><iframe src='https://www.youtube.com/embed/<?php echo $video; ?>' frameborder='0' allowfullscreen></iframe></div>
        
		</div>