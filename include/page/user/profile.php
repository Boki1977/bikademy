<?php
//definira crvene rubove fielda ako je prazno

if($k_mjesto=='')
{
$mjesto_border='style="border-style: solid; border-color:red; border-width:1px;"';
}

if($k_drzava=='')
{
$drzava_border='style="border-style: solid; border-color:red; border-width:1px;"';
}
?>

<form id="registrationForm" method="post" action="update_register.php">
<div class="card card-style" style="margin-top:50%;">
            <div class="content mb-0">                       
                
                
                <div class="input-style input-style-2 has-icon input-required">         
                    <label><b>Name</b></label>                   
                    <input class="form-control" type="text" name="ime" value="<?php echo $k_ime; ?>">
                </div> 

               
				<div class="input-style input-style-2 has-icon input-required">         
                    <label><b>Last name</b></label>                   
                    <input class="form-control" type="text" name="prezime" value="<?php echo $k_prezime; ?>">
                </div> 
				
				<div class="input-style input-style-2 has-icon input-required">         
                    <label><b>Email</b></label>                   
                    <input class="form-control" type="email" name="email" value="<?php echo $k_email; ?>" disabled>
                </div> 
				
				
				<div class="input-style input-style-2 has-icon input-required">         
                    <label><b>Password</b></label>                   
                    <input class="form-control" type="password" name="lozinka" placeholder="Type new password if you wont change it">
                </div> 
				
				<div class="input-style input-style-2 has-icon input-required">         
                    <label><b>City</b></label>                   
                    <input class="form-control" type="text" name="mjesto" value="<?php echo $k_mjesto; ?>" <?php echo $mjesto_border; ?>>
                </div> 
				
				<div class="input-style input-style-2 has-icon input-required">         
                    <label><b>Country</b></label>                   
                    <input class="form-control" type="text" name="drzava" value="<?php echo $k_drzava; ?>" <?php echo $drzava_border; ?>>
                </div> 
				<button type="submit" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue2-dark mt-4"></i>Update</button>
                <a href="logout.php"><i class="fas fa-power-off" style="color:red;"></i> Log out</a>
            </div>
			
        </div>
</form>		
		