<?php
	$list1 = "4, 5, 6, 7";
	$list2 = "4, 5, 7, 8";
	
	// combine both lists with unique values only
	$result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
	echo "Merge two lists into an array: <pre>"; var_dump($result); echo "</pre>";