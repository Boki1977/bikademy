<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$email=$_POST['email'];
$drzava=$_POST['drzava'];
$mjesto=$_POST['mjesto'];
$datum_rodjenja=$_POST['datum_rodjenja'];

// iz nekog razloga nakon insert.php skripte ne pojavljuje se email
$email2=$email;


if( isset($_POST['lozinka']) )
{
$lozinka_bezkoda=$_POST['lozinka'];	
$lozinka=$_POST['lozinka'];
$lozinka = md5( $lozinka );
}

// pregled ima li korisnika s ovim imenom   
                                    
$result = $con->query("

SELECT * FROM  korisnici
WHERE email='$email' 

");

$kcheck_num=mysqli_num_rows($result);

	
?>  	