<?php
	$my_array = array("red", "black", "green", "black", "white", "yellow"); 

	$sorted_unique_array = array_values(array_unique($my_array)); 

	echo "Unique values from an array: <pre>"; var_dump($sorted_unique_array); echo "</pre>";