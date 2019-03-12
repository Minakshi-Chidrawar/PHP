<?php
	function Start_End_Date_of_a_week($week, $year)
	{
		$time = strtotime("1 January $year", time());
		$day = date('w', $time);
		$time += ((7*$week) + 1 - $day) * 24 * 3600;
		$dates[0] = date('Y-n-j', $time);
		$time += 6 * 24 * 3600;
		$dates[1] = date('Y-n-j', $time);
		return $dates;
	}

	$result = Start_End_Date_of_a_week(12, 2014);
	echo 'Starting date of the week: ' . $result[0] . "<br>";
	echo 'End date the week: ' . $result[1];