<?php
	function count_Vowels($string)
	{
		preg_match_all('/[aeiou]/i', $string, $matches);
		return count($matches[0]);
	}
	echo "The number of vowels in the 'sampleInput' is: " . count_Vowels('sampleInput') . "<br>";
	echo "The number of vowels in the 'Testinput' is: " . count_Vowels('Testinput');