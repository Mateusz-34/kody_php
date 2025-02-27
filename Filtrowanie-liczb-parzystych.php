<?php

$a = [1,5,8,10,55,33,101,112];

for($i = 0; $i < count($a); $i++){
    if($a[$i] % 2 === 0){
        echo $a[$i];
        if ($i < count($a) - 1) {
            echo ",";
        }
    }
}

echo "\n";

foreach($a as $key => $item){
    if($item % 2 === 0) {
        echo $key." => ".$item;
        if ($key < count($a) - 1) {
            echo ",";
        }
    }
}

?>