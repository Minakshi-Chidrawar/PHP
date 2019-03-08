<?php
	$colors = array( "Red", "Green", "Black", "White"); 
	echo "<pre>"; var_dump($colors); echo "</pre>";

	$lower_colors = array_map('strtolower', $colors);
	echo "<pre>"; var_dump($lower_colors); echo "</pre>";
	
	$upper_colors = array_map('strtoupper', $colors);
	echo "<pre>"; var_dump($upper_colors); echo "</pre>";