
       <a href="?page=explore_regions">
        
        <div class="card card-style" style="margin-top: 30%;">
            <img src="data/source/bg/regions.jpg" class="img-fluid">
                       
        </div> 
		</a>		
		<a href="?page=explore_city">
		<div class="card card-style">
          <img src="data/source/bg/explore.jpg" class="img-fluid">
                       
        </div> 
       </a>
		
		<a href="?page=about">
         <div class="card card-style">
            <img src="data/source/bg/about.jpg" class="img-fluid">
                       
        </div>
		</a>
		<div class="content">
                <h5>Bikademy News</h5>
                
        </div>	
		 
		<div class="double-slider owl-carousel owl-no-dots">
		
            <?php
			include("include/page/index/rss_news.php");
			?>
            
        </div>


		<div class="content" style="margin-top:5%;">
                <h5>Bike interviews</h5>
                
        </div>	
		 
		<div class="double-slider owl-carousel owl-no-dots">
		
            <?php
			include("include/page/index/rss_interwiev.php");
			?>
            
        </div>

		
		
		<div class="content">
                <h5>Most popular exams</h5>
                
            </div>	
		 
		<div class="double-slider owl-carousel owl-no-dots">
		<?php
	      
		$result = $con->query("
		SELECT * FROM lokacija
		ORDER BY RAND () LIMIT 5
		");
							
		while ($obj=mysqli_fetch_object($result))
		{  
		
		include ("include/libs/lokacija.php");
	
		
		?>
        <div class="item">
               
		<a href="<?php echo $lokacija_link; ?>"><img src="<?php echo $thumb; ?>" class="img-fluid rounded-m"></a>  
		<a href="<?php echo $lokacija_link; ?>"><?php echo $naziv; ?></a>         
		</div>
           
		 <?php
		}
		?>		
        </div>  
		
		
		
	