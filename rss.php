
  
  <?php

  $doc = new DOMDocument();
  $doc->load( 'https://bikademy.com/category/news/feed/' );
  
  $channel = $doc->getElementsByTagName( "item" );
  foreach( $channel as $item )
  {
  $title = $item->getElementsByTagName( "title" );
  $title = $title->item(0)->nodeValue;
  
  $description = $item->getElementsByTagName( "description" );
  $description = $description->item(0)->nodeValue;
  

  
  $links = $item->getElementsByTagName( "link" );
  $link = $links->item(0)->nodeValue;
  

    //izvlačenje fotke from description
	$fotka_nova = explode('src="',$description); 
	list($otpadak,$fotografija_path)=$fotka_nova; 
	 
	$fotka_nova = explode('" class=',$fotografija_path); 
	list($fotka,$otpadak)=$fotka_nova;



	echo "$fotka<br>";
  

  }
  
?>

 

