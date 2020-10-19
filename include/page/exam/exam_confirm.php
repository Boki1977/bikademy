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

				<div style="margin-top:35%;"></div>
	
	

	
                <div class="card card-style">
				
			
               <img src="data/source/icons/exam_add.png">
			
                            
                </div>      
			
		
                <img src="data/source/icons/photo_hand.png" class="img-fluid" style="height:80%; margin-left:20%;">
                            
                
        