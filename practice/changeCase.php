<?php
	function array_change_value_case($input, $ucase)
	{
		$case = $ucase;
		$narray = array();
		
		foreach ($input as $key => $value)
		{
			$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
		}
		return $narray;
	}
	
	$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
	
	echo 'Actual array ';
	print_r($Color);
	
	echo '<br>Values are in lower case:';
	$myColor = array_change_value_case($Color, CASE_LOWER);
	print_r($myColor);
	
	echo '<br>Values are in upper case:';
	$myColor = array_change_value_case($Color, CASE_UPPER);
	print_r($myColor);