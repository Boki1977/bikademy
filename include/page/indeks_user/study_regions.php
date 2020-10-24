

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
						SELECT  a.naziv, b.status_polaganja					
						FROM lokacija a 
						INNER JOIN indeks b 
						ON b.kod_lokacije = a.kod_lokacije
						WHERE a.id_potkategorija='$indeks_id'
						AND b.kod_korisnika='$k_kod_korisnika'
						");
						
						$rb=0;
						while ($obj3=mysqli_fetch_object($result3))
						{ 
						
						$exam_naziv =($obj3->naziv);
						$exam_status =($obj3->status_polaganja);
						
						$rb++;
						
						?>
							<tr>
								<th scope="row"><?php echo $rb; ?></th>
								<td class="color-green1-dark"><?php echo $exam_naziv; ?></td>
								<td><?php echo $exam_status; ?></td>
							</tr>
												
						<?php
						}
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
					
					
        