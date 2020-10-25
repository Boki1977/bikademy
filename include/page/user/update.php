<?php

$results = $con->query("UPDATE korisnici SET 

ime='$ime',
prezime='$prezime',
drzava='$drzava',
mjesto='$mjesto'

WHERE id='$k_id'");

//ako je lozinka posebno ju updatea
if( isset($_POST['lozinka']) )
{
if($lozinka!='d41d8cd98f00b204e9800998ecf8427e')
{	
$results = $con->query("UPDATE korisnici SET 
lozinka='$lozinka'
WHERE id='$k_id'");
}

}


?>