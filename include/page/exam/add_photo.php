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
				
				<input type="file" class="upload-file" accept="image/*" name="image" id="file"  onchange="loadFile(event)">
                 <div id="confirm" style="display: none; text-align:center;"><h4>Confirm exam location</h4></div>
                   
                 <p><img id="output" width="80%" style="margin-left:10%;"/>
			  
			  <div id="confirm2" style="display: none; text-align:center;"><h5>Click on photo to confirm</h5></div> 
			  <div id="confirm3" style="display: none; text-align:center;"><h3><?php echo $naziv; ?></h3></div> 

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
	
	$("#file").hide();
	$("#confirm").show();
	$("#confirm2").show();
	$("#confirm3").show();
};
</script>
                            
                </div>      
			
				
                <img src="data/source/icons/photo_hand.png" class="img-fluid" style="height:80%; margin-left:20%;">
                            
                
        