<?php
	$ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	echo "<b>Array before sort:</b> <br>";
	foreach ($ages as $name => $age) 
	{
		echo $name . "  => " . $age . "<br>";
	}
	
	ksort($ages);
	echo "<b>Array after sort: </b><br>";
	foreach ($ages as $name => $age) 
	{
		echo $name . "  => " . $age . "<br>";
	}