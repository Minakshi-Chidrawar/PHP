<?php
	$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
	$second_array = array('c2', 'c4');

	echo "<pre>"; var_dump(array_diff_key($first_array, array_flip( $second_array))); echo "</pre>";