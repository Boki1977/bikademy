
  
  <?php

	$rb=0;

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

$rb++;
  
  
 
?>

			<div class="item">
			<?php
			if ($rb==1)
			{
			?>
               <div class="new_post"><img src="data/source/icons/new_post.png"></div>
			 <?php
			}
			?>
                    <img src="<?php echo $fotka; ?>" class="img-fluid rounded-m" style="max-height: 150px;">
                   
                        <a href="<?php echo $link; ?>" target="_blank"><h6><?php echo $title; ?></h6></a>
                            
                      
            </div>
<?php
  }
  ?>

 

