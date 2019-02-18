<?php
	$cars = array("Volvo", "BMW", "Toyota");
	echo "Array before sort: <br>";
	foreach ($cars as $car) 
	{
		echo $car . "<br>";
	}
	sort($cars);
	
	echo "Array after sort: <br>";
	foreach ($cars as $car) 
	{
		echo $car . "<br>";
	}