<?php
	$colors = array( "Red ", " Green", "Black ", " White "); 
	echo "<pre>"; var_dump($colors); echo "</pre>";
	array_walk($colors, create_function('&$val', '$val = trim($val);')); 
	echo "<pre>"; var_dump($colors); echo "</pre>";