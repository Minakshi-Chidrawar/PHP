<?php
	$str = 'PHP is popular than Python';
	$str = str_replace(array('Python', 'PHP'), array('@ython', 'Python'), $str);
	echo str_replace('@ython', 'PHP', $str);