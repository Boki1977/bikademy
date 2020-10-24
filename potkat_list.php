	<div id="potkategorija">
	<?php
	include("dbh.php");

	if (!empty($_POST["id"])) 
	{
	$id=$_POST['id'];  
	} 



										 
	$result = $con->query("
	SELECT * FROM potkategorija
	WHERE kategorija_id='$id'
	ORDER BY  naziv ASC
	");

	$rb=0;
	while ($obj=mysqli_fetch_object($result))
	{  
		
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
		 <h5 style=""><?php echo $naziv; ?></h5>
		</div>          
	</div>      
	</a>
	<?php
	}
	?>
	</div>