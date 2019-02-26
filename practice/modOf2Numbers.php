<?php
	function without_mod($m, $n)
	{
	   $divides=(int)($m/$n);
	   return $m-$n*$divides;
	}
	echo "Mod of 13 and 2 is: " . without_mod(13, 2) . "<br>";
	echo "Mod of 81 and 3 is: " . without_mod(81, 3) . "<br>";