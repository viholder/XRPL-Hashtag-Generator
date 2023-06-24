# XRPL-Hashtag-Generator
Hashtag Generator is a php-class tool that enables the marketing team to generate hashtags adding the word "XRPL" for promotions and campaigns. This tool simplifies the process of creating engaging hashtags, boosting the team's marketing efforts within the XRPL community.

the Php class that generates hashtags from a phrase with links to Instagram, Twitter or plain text adding "XRPL" word.

Requirements php >= 5.4.0

Installation just copy the class to your classes folder

Basic Usage;

$mywords = new phrasetowords( "Any phrase to extract hashtags from");

 $mywords->get_words("twitter");  // link to Twitter hashtag
 $mywords->get_words("Instagram"); //link to Instagram hashtag
 $mywords->get_words("hashtag"); // No link just text with "#"
 $mywords->get_words("plain"); // No link just text 
