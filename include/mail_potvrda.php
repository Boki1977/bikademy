<?php



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <ride@bikademy.com>' . "\r\n";




$poruka2='Obavijest o polaganju lokacije<p> 

<b>Potvrda o polaganju ispita</b><p> 
<b>Ime i prezime:</b> '.$k_ime.' '.$k_prezime.' <p>
<b>Položen ispit:</b> '.$naziv.'<p>
<b>Vrijeme polaganja:</b> '.$trenutni_datum.'
';

$poruka1='
oštovani, ova poruka je automatska i nemojte na nju odgovarati  <p>
<b>Potvrda o polaganju ispita</b><p> 
<b>Ime i prezime:</b> '.$ime.' '.$prezime.' <p>
<b>Položen ispit:</b> '.$naziv.'<p>
<b>Vrijeme polaganja:</b> '.$trenutni_datum.'
';


mail('ride@bikademy.com', $m1, $poruka2,$headers);
mail($k_email, $m1, $poruka1,$headers);
mail('bpredmer@gmail.com', $m1, $poruka2,$headers);






?>
