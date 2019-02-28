<?php
	$a = 5;
	$b = 3;
	$c = 4;
	$a *= $a;
	$b *= $b;
	$c *= $c;
	if($a + $b == $c || $a + $c == $b || $b + $c == $a){
		echo "The sides $a, $b and $c are the sides of right triangle";
	}
	else
	{
		echo "The sides $a, $b and $c are not the sides of right triangle";
	}