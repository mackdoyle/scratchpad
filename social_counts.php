<?php

     require("classes/ShareCount.php");
     $objURLSocial=new shareCount("http://www.quarterhorsenews.com");  //Add URL for its Social Stats
     $objAcctSocial=new shareCount("http://www.quarterhorsenews, westernhorseman");  //Add account names for social stats
     
     echo $objURLSocial->get_tweets(); //to get tweets
     echo $objURLSocial->get_facebook_shares(); //to get facebook total count (likes+shares+comments)
     echo $objURLSocial->get_linkedin(); //to get linkedin shares
     echo $objURLSocial->get_google_plusones(); //to get google plusones
     echo $objURLSocial->get_delicious(); //to get delicious bookmarks  count
     echo $objURLSocial->get_stumble(); //to get Stumbleupon views
     echo $objURLSocial->get_pinterest_pins(); //to get pinterest pins

?>