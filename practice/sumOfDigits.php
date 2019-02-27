<?php
	function sum_of_digits($nums) {
		$nums_array = str_split($nums);
		$digits_sum = 0;
		foreach($nums_array as $index => $value){
			$digits_sum += $value;
		}
		
		return $digits_sum;
	}
	echo "Sum of digits of 12345 is: " . sum_of_digits("12345") . "<br>";
	echo "Sum of digits of 9999 is: " . sum_of_digits("9999") . "<br>";