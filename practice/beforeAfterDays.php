<?php
	$dt = '2011-01-01';
	echo 'Original date : ' . $dt . "<br>";
	$no_days = 40;
	$bdate = strtotime("-" . $no_days . " days", strtotime($dt));
	$adate = strtotime("+" . $no_days . " days", strtotime($dt));
	echo 'Before 40 days : ' . date("Y-m-d", $bdate) . "<br>";
	echo 'After  40 days : ' . date("Y-m-d", $adate);