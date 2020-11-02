

	<?php
	include("header.php");
	?> 
<div class="card card-style">
            <div class="content">
                
                <p>
                    Choose your study
                </p>
            </div>

            <div class="accordion" id="accordion-1">
			
			<?php			                                    
			$result = $con->query("
			SELECT * FROM potkategorija
			WHERE grad='$grad' 					
			ORDER BY  naziv ASC 
			
			");
			while ($obj=mysqli_fetch_object($result))
			{ 
			$indeks_id =($obj->id);
			$study_naziv =($obj->naziv);
			
			//broj položenih ispita
			
			$result_num = $con->query("
			SELECT * FROM indeks
			WHERE kod_korisnika='$k_kod_korisnika' 					
			AND id_potkategorija ='$indeks_id'				
			");
			
			$total=mysqli_num_rows($result_num);
			
			$result_num_status = $con->query("
			SELECT * FROM indeks
			WHERE kod_korisnika='$k_kod_korisnika' 					
			AND id_potkategorija ='$indeks_id'		
			AND status_polaganja='1'
			");
			
			$polozeno=mysqli_num_rows($result_num_status);
			
			
			$razlika=$total-$polozeno;
			
			if($razlika>0)
			{
				$info="For finishing this Study, you need to pass <b>$razlika</b> more exams. <i class='far fa-times-circle' style='color: red;'></i>";
			}
			if($razlika<1)
			{
				$info="Congratulations! You have successfully passed this exam. Claim Your reward!";
			}
			
			?>
                <div class="mb-0">
                    <button class="btn accordion-btn border-0" data-toggle="collapse" data-target="#collapse<?php echo $indeks_id; ?>">
                        <i class="fa fa-star color-yellow1-dark mr-2"></i>
                        <?php echo $study_naziv; ?>
                        <i class="fa fa-plus font-10 accordion-icon"></i>
                    </button>
                    <div id="collapse<?php echo $indeks_id; ?>" class="collapse" data-parent="#accordion-1">
					
                        <div class="pt-1 pb-2 pl-3 pr-3">
						<table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
						<thead>
							<tr class="bg-gray1-dark">
								<th scope="col" class="color-theme">NO.</th>
								<th scope="col" class="color-theme">EXAM</th>
								<th scope="col" class="color-theme">STATUS</th>
							</tr>
						</thead>
						<tbody>
						<?php			                                    
						$result3 = $con->query("
						SELECT  a.id, a.naziv, b.status_polaganja					
						FROM lokacija a 
						INNER JOIN indeks b 
						ON b.kod_lokacije = a.kod_lokacije
						WHERE a.id_potkategorija='$indeks_id'
						AND b.kod_korisnika='$k_kod_korisnika'
						");
						
						$rb=0;
						while ($obj3=mysqli_fetch_object($result3))
						{ 
						
						$exam_id =($obj3->id);
						$exam_naziv =($obj3->naziv);
						$exam_status =($obj3->status_polaganja);
						
						$rb++;
						if($exam_status==1)
						{
							
							$status='<i class="fas fa-check-circle" style="color: green;"></i>';
							$link='';
						
						}
						if($exam_status==0)
						{
							$status='<i class="far fa-times-circle" style="color: red;"></i>';
							$link='?page=add_exam&lokacija_id='.$exam_id.'';
						}
						
						
						
						?>
							<tr>
								<th scope="row"><?php echo $rb; ?></th>
								
								<td class="color-green1-dark"><?php if($status==0){ ?><a href="<?php echo $link; ?>"><?php } ?><?php echo $exam_naziv; ?><?php if($status==0){ ?></a><?php } ?></td>
								
								<td><?php echo $status; ?></td>
							</tr>
												
						<?php
						}
						
						echo $info;
						?>
                         
						</tbody>
						</table>						 
							
                        </div>
                    </div>
                </div>
             <?php
			}
			?>
            </div>
        </div>
					
					
        