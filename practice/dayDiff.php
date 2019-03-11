<?php
	$to_date = time(); // Input your date here e.g. strtotime("2014-01-02")
	$from_date = strtotime("2012-01-31");
	$day_diff = $to_date - $from_date;
	echo "The diff between the dates " . date($to_date) . " and " . date($from_date) . " is: " . floor($day_diff/(60*60*24));