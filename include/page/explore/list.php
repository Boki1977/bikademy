
        
				<div style="margin-top:45%;"></div>
	
	
					<?php                                      
					$result = $con->query("
					SELECT * FROM lokacija
					WHERE id_potkategorija='$potkat' 
					AND lang='eng'
					ORDER BY  naziv ASC
					");
					
					$rb=0;
					while ($obj=mysqli_fetch_object($result))
					{  
					
					include ("include/libs/lokacija.php");
					$rb++;
					//provjerava je li par ili nepar zbog pr-0 ili pl-0 u divu
					
					if($rb % 2 == 0){ 
					$div="pl-0";  
					} 
					else{ 
					$div="pr-0";
					}

					$result2 = $con->query("
					SELECT * FROM potkategorija
					WHERE id='$id_potkategorija' 					
					");
					while ($obj2=mysqli_fetch_object($result2))
					{  
					$grad_status=($obj->grad);	
					}
					
					if($grad_status==0)
					{
						$card_color="#036534";
					}
					else{
						$card_color="#0084c2";
					}
							
					?>
					
				<a href="<?php echo $lokacija_link; ?>">
                <div class="card card-style" style="background-color:<?php echo $card_color; ?>;">
                    <img src="<?php echo $thumb; ?>" class="img-fluid">
                    <div class="content pb-1">
                     <h5 style="color:white;"><?php echo $naziv; ?></h5>
                    </div>          
                </div>      
				</a>
            
       
					<?php
					}
					?>
					
        