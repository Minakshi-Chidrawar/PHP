<?php
	$file = fopen("input.txt","r");
	$stdin = trim(fgets($file));
	$nums = explode(" ", $stdin);
	rsort($nums);
	print("After sorting the said integers:\n");
	echo implode(' ', $nums);