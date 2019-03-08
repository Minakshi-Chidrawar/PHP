<?php
	function file_extension($str1){
		$str1 = implode("",explode("\\",$str1));
		$str1 = explode(".",$str1);
		$str1 = strtolower(end($str1));
		 return $str1;
	}

	$file = 'example.txt';
	echo "Extension of file '<b>" . $file . "</b>' is: ". file_extension($file) . "<br>";
	$file = 'example.jpg';
	echo "Extension of file '<b>" . $file . "</b>' is: ". file_extension($file) . "<br>";