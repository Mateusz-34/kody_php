<?php

$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);

foreach($tablica as $index => $value){
    echo $value;
    if ($index < count($tablica) - 1) {
        echo ", ";
    }
}

?>