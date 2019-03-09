<?php
	$colors = array( 
	  0 => 'Red', 
	  1 => 'Green', 
	  2 => 'White', 
	  3 => 'Black', 
	  4 => 'Red', 
	); 

	$numbers = array( 
	  0 => 100, 
	  1 => 200, 
	  2 => 100, 
	  3 => -10, 
	  4 => -10, 
	  5 => 0, 
	); 
	$uniq_colors = array_keys(array_flip($colors)); 
	$uniq_numbers = array_keys(array_flip($numbers)); 

	echo "Unique Colors from an array: <pre>"; var_dump($uniq_colors); echo "</pre>";
	echo "Unique numbers from an array: <pre>"; var_dump($uniq_numbers); echo "</pre>";