<?php
	function roundout ($value, $places=0) {
	if ($places < 0) { $places = 0; }
	$x= pow(10, $places);
	return ($value >= 0 ? ceil($value * $x):floor($value * $x)) / $x;
	}
	echo roundout (78.78001, 2) . "<br>";
	echo roundout (8.131001, 2) . "<br>";
	echo roundout (0.586001, 4) . "<br>";
	echo roundout (-.125481, 3) . "<br>";
	echo roundout (-.125481);