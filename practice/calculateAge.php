<?php
	$bday = new DateTime('18.4.1984'); // Your date of birth
	$today = new Datetime(date('m.d.y'));
	$diff = $today->diff($bday);
	printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
	printf("\n");