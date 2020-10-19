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

        
 </style>
				<div style="margin-top:35%;"></div>
	
	
					
<form method="POST" enctype="multipart/form-data" action="?page=exam_confirm&lokacija_id=<?php echo $lokacija_id; ?>" id="formular">
	
                <div class="card card-style">
				
				<input type="file" class="upload-file" accept="image/*" name="image" id="file"  onchange="loadFile(event)">
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
	$("#confirm").show();
	$("#confirm2").show();
	$("#confirm3").show();
	$("#photo").show();
};
</script>
                            
                </div>      
			
	</form>			
                <img src="data/source/icons/photo_hand.png" class="img-fluid" style="height:80%; margin-left:20%;">
                            
                
        