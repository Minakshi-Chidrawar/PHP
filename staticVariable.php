<?php
	function myTest() {
		static $x = 0;
		echo "The value of x is: " . $x . "<br><br>";
		$x++;
	}

	myTest();
	myTest();
	myTest();