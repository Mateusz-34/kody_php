<?php

$a = [1,-2,-4,3,6];

function findMaxinArray(array $a){
    $temp = $a[0];
        for($i = 1; $i < count($a); $i++){

            if($a[$i] > $temp){
                $temp = $a[$i];
            }
        }
        return $temp;
}

echo findMaxinArray($a);

?>