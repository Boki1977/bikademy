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
 <style>
 
 .myButton {
	background-color:#44c767;
	border-radius:5px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:2px 17px;
	text-decoration:none;
}
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}

      #confirm_box{

	display:none;

}  
 </style>
				<div class="card card-style" style="margin-top: 30%;">
                  <h4 style="text-align: center; margin-top:8%; margin-bottom:8%;"><?php echo $naziv; ?></h4>          
			</div> 
	
	<div class="card card-style" id="confirm_box">

<div class="spinner-border color-blue2-dark"  style="margin-top:5%; margin-bottom:5%; margin-left:43%" id="preload" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
</div>
					
				<form method="POST" enctype="multipart/form-data" action="?page=exam_confirm&lokacija_id=<?php echo $lokacija_id; ?>" id="formular">
	
                <div class="card card-style">
				
				
                   
				
				
				<input type="file" class="upload-file" accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
				<label for="file" style="cursor: pointer;"><img src="data/source/icons/upload2.png" id="image"></label></p>
                 <div id="confirm" style="display: none; text-align:center; margin-top:2%; margin-bottom:1%;"><h4>Confirm exam <br>location</h4></div>
                   
                
				 <div style="position:relative;">
				 <img id="output" width="50%" style="margin-left:25%;"/>
				   <div id="photo" style="position:absolute; bottom:0; right:20%; display: none;"><img src="data/source/icons/check.png"></div>
				 </div>
			  
			  <input type="submit" id="confirm2" name="posalji" class="myButton" style="display: none; width:50%; margin-left:25%; margin-top: 2%;" value="CLICK HERE TO CONFIRM">
			  
			  <div id="confirm3" style="display: none; text-align:center; margin-bottom:1%; margin-top:1%;"><h3><?php echo $naziv; ?></h3></div> 

				<script>
				var loadFile = function(event) {
					var image = document.getElementById('output');
					image.src = URL.createObjectURL(event.target.files[0]);
					
					$("#file").hide();
					$("#image").hide();
					$("#confirm").show();
					$("#confirm2").show();
					$("#confirm3").show();
					$("#photo").show();
				};
				
					$(document).ready(function(){
					
				$("#confirm2").click(function(){

				$('#confirm_box').show() 
				$("#formular").hide();
				
				
				});
				
				});
				</script>
                            
                </div>      
			
				</form>			
                <img src="data/source/icons/photo_hand.png" class="img-fluid" style="height:80%; margin-left:20%;">
                            
                
        