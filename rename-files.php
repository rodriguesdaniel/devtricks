<?php

  #script to help you to rename some files (photos, or any file type)
  #credits: code base from some user, pieces of codes from searchs on the web
  #required: PHP support
	
	// define your image folder
	$folder = "./"; // relative or './myphotos/'

	if ($handle = opendir($folder)){
    	while (false !== ($fileName = readdir($handle))) {
        	$newName = str_replace("SEARCH_SOMETHING","REPLACE_SOMETHING",$fileName);
        	rename($folder.$fileName, $folder.$newName);
    	}
    	closedir($handle);
	}
?>
