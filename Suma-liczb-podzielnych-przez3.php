<?php

$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);

$suma = 0;
foreach($tablica as $index => $value) {
    if($value % 3 === 0){
        $suma += $value; 
    }
}

echo $suma; 

?>