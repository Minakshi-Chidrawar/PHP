<?php
	function sort_subnets($a,$b)
	{
		if ($a==$b) return 0;
		return ($a<$b) ? -1 : 1;
	}
	$subnet_list = 
	array('192.169.12',
	'192.167.11',
	'192.169.14',
	'192.168.13',
	'192.167.12',
	'122.169.15',
	'192.167.16'
	);
	usort($subnet_list, 'sort_subnets');
	echo "<pre>"; var_dump($subnet_list); echo "</pre>";