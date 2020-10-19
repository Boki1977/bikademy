<?php
$id =($obj->id);
$id_kategorija=($obj->id_kategorija);
$id_potkategorija=($obj->id_potkategorija);
$naziv=($obj->naziv);
$opis=($obj->opis);
$fotografija=($obj->fotografija);
$galerija=($obj->galerija);
$video=($obj->video);
$geo_lokacija=($obj->geo_lokacija);
$br_polaganja=($obj->br_polaganja);
$id_grupa=($obj->id_grupa);
$user_id=($obj->user_id);
$adresa=($obj->adresa);
$telefon=($obj->telefon);
$email=($obj->email);
$web=($obj->web);
$facebook=($obj->facebook);
$kod_lokacije=($obj->kod_lokacije);
$radijus=($obj->radijus);
$lang=($obj->lang);


$fotka_potkat = explode("/data/",$fotografija); 
list($otpadak,$fotografija_path)=$fotka_potkat; 
$fotka_potkat="$image_path/data/$fotografija_path";  



$thumb = explode("/data/",$fotografija); 
list($otpadak,$fotografija_path)=$thumb; 

$thumb = explode("lokacije/",$fotografija_path); 
list($otpadak,$fotografija_path2)=$thumb;

$thumb="$image_path/data/thumbs/lokacije/$fotografija_path2";  


$lokacija_link="?page=lokacija&lokacija_id=$id"
?>