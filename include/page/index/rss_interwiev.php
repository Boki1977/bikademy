
  
  <?php

  $doc = new DOMDocument();
  $doc->load( 'https://bikademy.com/category/bike-interview/feed/' );
  
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



  
?>

			<div class="item">
               <div class="new_post"><img src="data/source/icons/new_post.png"></div>
                    <img src="<?php echo $fotka; ?>" class="rounded-m" width="200" height="100">
                   
                        <a href="<?php echo $link; ?>" target="_blank"><h6><?php echo $title; ?></h6></a>
                            
                      
            </div>
<?php
  }
  ?>

 

