<?php
	$x = 5;
	$y = 10;
	
	echo "The value for variable y is: " . $y;
	
	function myTest() {
		global $x, $y;
		$y = $x + $y;
	} 

	myTest();  // run function
	echo "<br>Output the new value for variable y is: " . $y; // output the new value for variable $y