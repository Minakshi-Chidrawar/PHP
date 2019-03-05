<?php
	 $x = array(1, 2, 3, 4, 5);
	 echo "Before deletion element from array <br> <pre>"; var_dump($x); echo "</pre>";
	 unset($x[3]);
	 $x = array_values($x);
	 
	echo "After deletion element from array <br> <pre>"; var_dump($x); echo "</pre>";