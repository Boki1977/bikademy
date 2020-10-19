
        <?php
	      
		$result = $con->query("
		SELECT * FROM lokacija
		WHERE id='$lokacija_id' 
		");
							
		while ($obj=mysqli_fetch_object($result))
		{  
		
		include ("include/libs/lokacija.php");
		}
		
		?>
      <div class="card card-style" style="margin-top:45%;">
            <div class="content">
                <h4 class="mb-0">Photo galery</h4>
                
            </div>
            <div class="divider mb-0"></div>
            <div class="gallery-view-controls">
                <a href="#" class="color-highlight gallery-view-1-activate"><i class="fa fa-th"></i></a>
                <a href="#" class="gallery-view-2-activate"><i class="fa fa-th-large"></i></a>
                <a href="#" class="gallery-view-3-activate"><i class="fa fa-bars"></i></a>
                <div class="clearfix"></div>
            </div>
            <div class="content my-n1">
                <div class="gallery-views gallery-view-1">
				
				<?php
				$galerija_list = explode("data/",$galerija); 
				list($otpadak,$galerija_path)=$galerija_list; 
				$galerija_path="data/$galerija_path";
				
				
				$directory = "$galerija_path";
				$files = scandir ($directory);
				$firstFile = "$directory/$files[2]";	
				?>
				
				<?php
				$files = scandir(''.$galerija_path.'');

				foreach(array_slice($files,3,500) as $file) {
				if($file!=".." & $file!="." & $file!="thumb"){

				
			 
				echo'
				<a data-lightbox="gallery-1" href="images/pictures/10t.jpg" title="<?php echo $galerija_path; ?>">
                        <img src="images/empty.png" data-src="images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                        <div class="caption">
                            <h4 class="color-theme">Messy Desk?</h4>
                            <p>Some may consider this to be a very messy desk.</p>
                            <div class="divider bottom-0"></div>
                        </div>
                </a>
				';
				}
				}
										
				?>
                    
                  		
                </div>
            </div>
        </div>

		