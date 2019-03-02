<?php
	$stdin = "The quick brown fox";
	
	echo "Original string: " . $stdin; 
	$words = preg_split("/[\s,\.]/", $stdin);
	
	$countWords = count($words);
	
	$compWords = array();
	$char = 0;
	for ($i = 0; $i < $countWords; $i++) {
	  $char += strlen($words[$i]);
	  if (strlen($words[$i]) > 2 && strlen($words[$i]) < 7) {
		$compWords[] = $words[$i];
	  }
	}
	echo "<br> There are " . $countWords . " words in the string '" . $stdin . "'.";
	echo "<br> Words  of 3 to 6 characters length: ";
	print implode(' ', $compWords);
	echo "<br> There are " . $char . " letters in the string '" . $stdin . "'.";