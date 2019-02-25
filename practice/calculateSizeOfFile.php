<?php
	$myfile = fopen("test.txt", "r") or die("Unable to open file!");
	$txt = "PHP Exercises\n";
	fwrite($myfile, $txt);
	$txt = "from\n";
	fwrite($myfile, $txt);
	$txt = "w3resource\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	echo "Size of the file: ".filesize("test.txt");