<?php
	$color1 = array( array('Red', 80), array('Green', 70), array('white', 60) ); 
			
	$color2 = array( array('Green', 70), array('Black', 95) ); 
			
	$color = array_udiff($color1, $color2, create_function( 
		'$a,$b', 'return strcmp( implode("", $a), implode("", $b) ); ') 
		); 
			
	echo "Values of the first array that are not in the second array: <pre>"; var_dump($color); echo "</pre>";