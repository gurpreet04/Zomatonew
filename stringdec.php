<?php

function CustomEncode ($inputstring )  { 
	$length = strlen($inputstring);
	$outputstring='';
	
	for($i=0; $i< $length; $i++)
	{
		
		$cal = ord($inputstring{$i})-96;
		$outputstring .= $cal;
	}

	return $outputstring;
} 

$output = CustomEncode("abcd");

echo $output;

?>