<?php
	function array_not_unique($my_array) {
		$same = array();
		natcasesort($my_array);
		reset ($my_array);

		$old_key    = NULL;
		$old_value    = NULL;
		foreach ($my_array as $key => $value) {
			if ($value === NULL) { continue; }
			if ($old_value == $value) {
				$same[$old_key]    = $old_value;
				$same[$key]        = $value;
			}
			$old_value    = $value;
			$old_key    = $key;
		}
	return $same;
	}

	$test_array = array();
	$test_array[1]    = 'xyz@example.com';
	$test_array[2]    = 'dse@example.com';
	$test_array[3]    = 'xyz@example.com';
	$test_array[4]    = 'mno@example.com';

	echo "Duplicate values from an array: <pre>"; var_dump(array_not_unique($test_array)); echo "</pre>";