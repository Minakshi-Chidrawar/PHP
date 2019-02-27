<?php
	  $heights = array();
	  $file = fopen("input.txt","r");
	  while($line = fgets($file)) {
		rtrim($line, "<br>");
		array_push($heights, (int)$line);
	  }
	  rsort($heights);
	  print("Heights of the top three buildings:<br>");
	  echo $heights[0] . "<br>";
	  echo $heights[1] . "<br>";
	  echo $heights[2] . "<br>";