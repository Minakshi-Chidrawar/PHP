<?php
	$dt = "2008-02-23";
	echo 'First day : '. date("Y-m-01", strtotime($dt)) . '<br>Last day : '. date("Y-m-t", strtotime($dt));