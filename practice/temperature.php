<?php
	$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
	68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
	
	$temp_array = explode(',', $month_temp);
	$tot_temp = 0;
	$temp_array_length = count($temp_array);
	
	foreach($temp_array as $temp)
	{
		$tot_temp += $temp;
	}
	
	$avg_high_temp = $tot_temp/$temp_array_length;
	echo "Average Temperature is : " . $avg_high_temp . "<br>"; 
	
	sort($temp_array);
	$lowestFirstFiveElements = array_slice($temp_array, 0, 5);
	echo " List of five lowest temperatures: <br>" . implode(", ", $lowestFirstFiveElements) . "<br>" ;

	$highestLastFiveElements = array_slice($temp_array, count($temp_array)-5, 5);	
	echo "<br>List of five highest temperatures: <br>" . implode(", ", $highestLastFiveElements) . "<br>" ;