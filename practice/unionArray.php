	<?php
	function array_union($x, $y)
	   { 
		  $aunion = array_merge(
				array_intersect($x, $y),
				array_diff($x, $y),     
				array_diff($y, $x)      
			);
			return $aunion;
	   }
	$a = array(1, 2, 3, 4);
	$b = array(2, 3, 4, 5, 6);

	echo "Unique Colors from an array: <pre>"; var_dump(array_union($a, $b)); echo "</pre>";