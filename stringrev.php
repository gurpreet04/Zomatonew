<?php
function Custom_STR_Reverse($s) {
        
	$i = 0;
	$revstr= '';
	while(isset($s[$i])){
		$i++;

	}
$i--;
	while(isset($s[$i])){
	$revstr .= $s[$i];
	$i--;
	}
return $revstr;
}
$rev = Custom_STR_Reverse('gurpreet');
echo $rev;
?>