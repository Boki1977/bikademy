<?php
$status='1';


$kod_korisnika= (rand(10,100000000));

$kod_time="$dan$mjesec$godina$sat$minuta$sekunda";

$kod_korisnika="$kod_korisnika$kod_time";
	

 $insert_row = $con->query("INSERT INTO korisnici
(


ime,
prezime,
email,
lozinka,
status,
datum,
kod_korisnika


) 

VALUES

(
'$ime',
'$prezime',
'$email',
'$lozinka',
'$status',
'$danas',
'$kod_korisnika'


)

");

include("include/page/user/registracija_mail.php");
    	



// Preuzmanje aktivnih lokacija i kreiranje indeksa za novog korisnika


$result = $con->query("

SELECT * FROM lokacija

WHERE status='1'



");

 while ($obj=mysqli_fetch_object($result))
 
{
    
    	include("include/libs/lokacija.php");
    	
    	
    	$insert_row = $con->query("INSERT INTO indeks
(


id_kategorija,
id_potkategorija,
kod_lokacije,
kod_korisnika,
status_polaganja,
datum_otvaranja

) 

VALUES

(

'$id_kategorija',
'$id_potkategorija',
'$kod_lokacije',
'$kod_korisnika',
'0',
'$danas'


)

");
    	
    	
    	
}





?>