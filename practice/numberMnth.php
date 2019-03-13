<?php
	$month_num  = 9;
	$dateObj   = DateTime::createFromFormat('!m', $month_num);
	$month_name = $dateObj->format('F');
	echo $month_name;