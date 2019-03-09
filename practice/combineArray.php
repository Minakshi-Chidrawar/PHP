<?php
	function combine_Array($keys, $values)
	{
		$result = array();
		foreach ($keys as $i => $k) {
			$result[$k][] = $values[$i];
		}
		array_walk($result, create_function('$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
		return    $result;
	}
	$array1 = array('x', 'y', 'y', 'x');
	$array2 = array(10, 20, 30, 40);

	echo "<pre>"; var_dump(combine_Array($array1, $array2)); echo "</pre>";