
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
		
		
		
		if($user_num > 0)
		{
			
		$upload_path = 'uploads/';
		
		$tmpname = $_FILES['image']['tmp_name'];
		$filename = $_FILES['image']['name'];
		
		$filename_array = explode('.',$filename);
		$ext = end($filename_array);
		$new_name = $k_kod_korisnika.$lokacija_id.'.'.$ext;
		
	    $destfile = $upload_path.$new_name;
			
			if(move_uploaded_file($tmpname,$destfile)){
				
			$results = $con->query("UPDATE indeks SET 
			status_polaganja='1',
			datum_polaganja='$danas',
			fotografija='$destfile'

			WHERE kod_korisnika='$k_kod_korisnika' AND kod_lokacije='$kod_lokacije'");	
				
				
				include ("include/mail_potvrda.php");
				
			$image="exam_add.png";
			
			}
		}
		
		

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
</head>


				<div style="margin-top:0%;"></div>
                <div class="card card-style">
                <img src="data/source/icons/<?php echo $image; ?>" class="img-fluid">           
                </div>      
			
	
					
				
<?php
}
?>