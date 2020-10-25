<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$email=$_POST['email'];
$drzava=$_POST['drzava'];
$mjesto=$_POST['mjesto'];
$datum_rodjenja=$_POST['datum_rodjenja'];




if( isset($_POST['lozinka']) )
{
$lozinka_bezkoda=$_POST['lozinka'];	
$lozinka=$_POST['lozinka'];
$lozinka = md5( $lozinka );
}

?>


    	