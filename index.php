<?php

require_once('class.hashtag.php');

	$mywords = new phrasetowords( "González arropa a Sánchez: “Mi lealtad es con un proyecto que ahora encabezas tú“");
 
  echo  $mywords->get_words("twitter");  // link to Twitter hashtag
  echo  $mywords->get_words("Instagram"); //link to Instagram hashtag
  echo  $mywords->get_words("hashtag"); // No link just text with "#"
  echo  $mywords->get_words("plain"); // No link just text 




?>
