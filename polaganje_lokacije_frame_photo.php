
<!DOCTYPE HTML>
<head>

<?php
include("login_check.php");
if($user_num > 0)
{
$lokacija_id=$_GET['lokacija_id'];

		$result = $con->query("
		SELECT * FROM lokacija
		WHERE id='$lokacija_id' 
		");
							
		while ($obj=mysqli_fetch_object($result))
		{  
		
		include ("include/libs/lokacija.php");
		}
		$geo = explode(",",$geo_lokacija); 
list($lang,$lat)=$geo;   


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">

   <script type="text/javascript" src="scripts/jquery.js"></script>
				<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
				<script type="text/javascript" src="scripts/custom.js"></script>

 

</head>

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



<div class="card card-style" id="confirm_box">

<div class="spinner-border color-blue2-dark"  style="margin-top:5%; margin-bottom:5%; margin-left:43%" id="preload" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
</div>
		
				<form method="POST" enctype="multipart/form-data" action="frame_exam_confirm.php?lokacija_id=<?php echo $lokacija_id; ?>" id="formular">
	
                <div class="card card-style">
				
				
                    

				
				
				<input type="file" class="upload-file" accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
				<label for="file" style="cursor: pointer;"><img src="data/source/icons/upload2.png" id="image"></label></p>
                 <div id="confirm" style="display: none; text-align:center; margin-top:2%; margin-bottom:1%;"><h4>Confirm exam <br>location</h4></div>
                   	
                
				 <div style="position:relative;">
				 <img id="output" width="50%" style="margin-left:25%;"/>
				   <div id="photo" style="position:absolute; bottom:0; right:20%; display: none;"><img src="data/source/icons/check.png"></div>
				 </div>
			  <div id="submit" onclick="myFunction()">
			  <input type="submit" id="confirm2" name="posalji" class="myButton" style="display: none; width:50%; margin-left:25%; margin-top: 2%;" value="CLICK HERE TO CONFIRM" onclick="this.style.display='none';">
			  </div>
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
			
                <img src="data/source/icons/photo_hand.png" class="img-fluid" id="hand" style="height:80%; margin-left:20%;">
              
				
				<?php
				}
				?>