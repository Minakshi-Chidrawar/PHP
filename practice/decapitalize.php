<?php
	function decapitalize($string, $upperRest = false)
	{
		return lcfirst($upperRest ? strtoupper($string) : $string);
	}
	echo decapitalize('Python');