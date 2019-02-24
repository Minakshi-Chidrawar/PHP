<?php
	$data = array('Salary of Mr. A'=>1000, 'Salary of Mr. B'=>1200, 'Salary of Mr. C'=>1400);
	echo "<table border=1 cellspacing=0 cellpading=0>";
	
	foreach($data as $name => $salary)
	{
		echo "<tr><td><font color=blue>" . $name . "</td><td>" . $salary . "</tr></td>";
	}
	
	echo "</table>";