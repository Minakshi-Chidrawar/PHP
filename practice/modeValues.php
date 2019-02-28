<?php
	$hoge=array();
	
	$file = fopen("input.txt","r");
	
	while($hoge[]=trim(fgets($file))){}
	$hage=array_count_values($hoge);
	$max = max($hage);
	$koge= array_keys($hage,$max);
	echo "Mode values (in ascending order):\n";
	sort($koge,SORT_ASC);
	foreach ($koge as $val) {
		echo $val.PHP_EOL;
	}