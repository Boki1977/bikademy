
       <?php
	   $country=$_GET['cat'];
	   
	   
	   //ukoliko je city povlači sve potkategorije koje imaju grad 1, u suprotnom 0
	   if($page=='explore_city'){
		   $grad=1;
		   $card_color="#0084c2";
		   $card_image="data/source/bg/explore.jpg";
	   }
	   if($page=='explore_regions'){
		   $grad=0;
		   $card_color="#036534";
		   $card_image="data/source/bg/regions.jpg";
	   }
	   
	   
	  
	   
	   ?>
        
        <div class="card card-style" style="margin-top: 30%;">
          <img src="<?php echo $card_image; ?>" class="img-fluid">
                       
        </div> 
		
		
		<div class="card card-style">
            <div class="content mb-0">        
           
              

                <div class="input-style input-style-2 input-required">
                    <span class="input-style-1-active input-style-1-inactive">Select your county</span>
                    <em><i class="fa fa-check color-green1-dark"></i></em>
                    <select data-plugin-selectTwo class="form-control" id="select_c">
                        <option value="default" disabled="" selected="">Country list</option>
						<?php                                      
						$result = $con->query("
						SELECT * FROM kategorija
						
						ORDER BY  naziv ASC
						");
						while ($obj=mysqli_fetch_object($result))
						{  
						$id=($obj->id);	
						$naziv=($obj->naziv);	
						
						if($id==$country){
							$selection="selected";
						}
						else{
						    $selection="";
						}
						?>
                       <option value="<?php echo $id; ?>"><?php echo $naziv; ?></option>
					   
					   <?php
					   }
					   ?>
                    </select>
                </div>
                

                
            </div>
        </div>
		
	
					<div id="potkategorija"></div>
	
					<div id="potkategorija_trenutna">
					<?php                                      
					$result = $con->query("
					SELECT * FROM potkategorija
					WHERE grad='$grad' 					
					ORDER BY  naziv ASC
					");
					
					$rb=0;
					while ($obj=mysqli_fetch_object($result))
					{  
					$id=($obj->articleID);	
					include ("include/libs/potkategorija.php");
					$rb++;
					//provjerava je li par ili nepar zbog pr-0 ili pl-0 u divu
					
					if($rb % 2 == 0){ 
					$div="pl-0";  
					} 
					else{ 
					$div="pr-0";
					} 
					?>
					
					<a href="<?php echo $potkat_link; ?>">
					<div class="card card-style" style="background-color:<?php echo $card_color; ?>;">
						<img src="<?php echo $fotka_potkat; ?>" class="img-fluid">
						<div class="content pb-1">
						 <h5 style="color:white;"><?php echo $naziv; ?></h5>
						</div>          
					</div>      
					</a>
					<?php
					}
					?>
					</div>
					
					
					
					<script type="text/javascript">
					
					$('#select_c').change(function(){

					$("#potkategorija_trenutna").hide();
					$('#potkategorija_trenutna').val("");
					 var id = $(this).val();

					$.post('potkat_list.php', {id: id},



					function(data){


					$("#potkategorija").html(data);

					$("#potkategorija").hide();

					$("#potkategorija").fadeIn('slow'); //Fade in the data given by the insert.php file


					});

					return false;



					});

					</script>
        