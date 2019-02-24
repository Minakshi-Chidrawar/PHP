<?php
	$numbers = array(4, 6, 2, 22, 11);
	echo "<b>Number array before sort:</b> <br>";
	foreach ($numbers as $number) 
	{
		echo $number . "<br>";
	}
	sort($numbers);
	echo "<b>Array after sort:</b> <br>";
	foreach ($numbers as $number) 
	{
		echo $number . "<br>";
	}