<?php
$id =($obj->id);
$kategorija_id=($obj->kategorija_id);
$naziv=($obj->naziv);
$opis=($obj->opis);
$fotografija=($obj->fotografija);
$status=($obj->status);
$user_id=($obj->user_id);
$grad=($obj->grad);


$fotka_potkat = explode("/data/",$fotografija); 
list($otpadak,$fotografija_path)=$fotka_potkat; 
$fotka_potkat="$image_path/data/$fotografija_path";  


$potkat_link="?page=locations&potkat=$id"
?>