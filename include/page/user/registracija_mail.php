<?php



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers = 'From: <info@academi.bike>' . "\r\n";




$poruka='Poštovani.

Ovo je automatska poruka i ne odgovarajte na nju
Ovom porukom potvrđujemo Vašu registraciju na Bicikademiju. Čestitamo.
Vaše korisničko ime za pristup sustavu je Vaš email, a lozinka je '.$lozinka_bezkoda.'. Za sva pitanje obratite se na naš kontakt





';


mail($email, 'Potvrda o upisu na Bicikademiju', $poruka,$headers);


$poruka2='Upravo je izvršena registracija na aplikaciji. '.$ime.' '.$prezime.'


';




mail('kherceg@gmail.com', 'Obavijest o registraciji ', $poruka2,$headers);
mail('bpredmer@gmail.com', 'Obavijest o registraciji ', $poruka2,$headers);
?>

