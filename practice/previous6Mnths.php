<?php
	for ($i = 1; $i <= 6; $i++) 
	{
	   $months[] = date("Y-m%", strtotime( date( 'Y-m-01' )." -$i months"));
	}
	var_dump($months);