

	
					
	
					
					 <div class="card card-style" style="margin-top: 50%;">
        <div class="content mb-0">        
           
                       <div class="input-style input-style-2 input-required">
                    <span class="input-style-1-active input-style-1-inactive">Select category</span>
                    <em><i class="fa fa-check color-green1-dark"></i></em>
                    <select data-plugin-selectTwo class="form-control" id="select_cat">
						 <option value="default" disabled="" selected="">---</option>
                       <option value="0">Regions</option>
                       <option value="1">Cities</option>
					   
					   
                    </select>
                </div>
                </div>
					</div> 
					
					<div id="category"></div>
					
					
					<script type="text/javascript">
					
					$('#select_cat').change(function(){
					 var id = $(this).val();

					$.post('indeks_category.php', {id: id},



					function(data){


					$("#category").html(data);

					$("#category").hide();

					$("#category").fadeIn('slow'); //Fade in the data given by the insert.php file


					});

					return false;



					});

					</script>
        