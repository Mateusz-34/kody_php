<?php

$a = [1,5,8,10,55,33,111,112];
$b = [11,55,1,44];
$c = [444,55,34,33];
$d = [1,5];

function printModulo(array $arg,$modulo){
	foreach($arg as $key => $item){
		if($item % $modulo === 0) {
			echo $key ."=>". $item.",";	
		}
	}
}

printModulo($a,3);
?>