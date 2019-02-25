<?php
	function valid_email($email)
	{
	  $result = trim($email);
	  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
	  {
		return "true";
	  } 
	  else 
	  {
		echo "false";
	  }
	}
	echo "Email abc@example.com is valid: " . valid_email("abc@example.com") . "<br>";
	echo "Email abc#example.com is valid: " . valid_email("abc#example.com") . "<br>";