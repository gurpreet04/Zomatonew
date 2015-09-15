<?php
function checkIPBan ($InputIP) {
 
	$bannedList = array('192.3.4.1','192.3.4.2','192.3.4.3','192.3.4.4','192.3.4.5','192.3.4.6');
	
	for($i=0;$i<6;$i++)
	{
	   if($bannedList[$i] == $InputIP)
		{
			$status = "Banned IP";
			break;
		}
		else
		{
			$status = "Good IP";
		}
	}
	
    return $status;
} 

$status = checkIPBan ('192.3.4.0') ;
echo $status;

?> 