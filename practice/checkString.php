<?php
	$arr1 = array('PHP', 'JS', 'Python');
	$arr2 = array('SQL', 200, 'MySQL');

	var_dump($arr1); echo "has all string values?: <pre>"; var_dump(array_sum(array_map('is_string', $arr1)) == count($arr1)); echo "</pre>";
	var_dump($arr2); echo "has all string values?: <pre>"; var_dump(array_sum(array_map('is_string', $arr2)) == count($arr2)); echo "</pre>";