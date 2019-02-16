<?php
	$x = 5;
	$y = 10;
	
	echo "The value of y before calling function is: " . $y; 
	function myTest() {
		$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	} 

	myTest();
	echo "<br><br>The value of y after calling function is: " . $y;