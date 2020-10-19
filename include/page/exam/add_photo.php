
        
				<div style="margin-top:35%;"></div>
	
	
					
				
                <div class="card card-style">
				
				<input type="file" class="upload-file" accept="image/*" name="image" id="file"  onchange="loadFile(event)">
                 
                   
              <p><img id="output" width="100%" /></p>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
	
	$("#file").hide();
};
</script>
                            
                </div>      
			
				
                <img src="data/source/icons/photo_hand.png" class="img-fluid" style="height:80%; margin-left:20%;">
                            
                
        