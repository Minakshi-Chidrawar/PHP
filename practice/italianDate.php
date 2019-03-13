<?php
	$old_Locale = setlocale(LC_TIME, 'it_IT');
	echo  strftime("Today is %a on %b %d, %Y");
	setlocale(LC_TIME, $old_Locale);