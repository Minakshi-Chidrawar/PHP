<?php
	 function find_non_repeat($word) {
	  $chr = null;
	  for ($i = 0; $i <= strlen($word); $i++) {
		 if (substr_count($word, substr($word, $i, 1)) == 1) {
			return substr($word, $i, 1);
		 }
	  }
	}

	echo "First non repeative char of 'Green' is: " . find_non_repeat("Green") . "<br>";
	echo "First non repeative char of 'abcdea' is: " . find_non_repeat("abcdea") . "<br>";