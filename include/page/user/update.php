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
$results = $con->query("UPDATE korisnici SET 
lozinka='$lozinka'
WHERE id='$k_id'");
}


?>