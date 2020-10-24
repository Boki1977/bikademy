 <?php
	      
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

			<div class="card card-style" style="margin-top: 30%;">
                  <h4 style="text-align: center; margin-top:8%; margin-bottom:8%;"><?php echo $naziv; ?></h4>          
			</div> 
	
	

	
                <div class="card card-style">
				
			
               <img src="data/source/icons/<?php echo $image; ?>" class="img-fluid">
			
                            
                </div>      
			
		
        