<?php

$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);

for($i = 0; $i<count($tablica); $i = $i+2){
    echo $tablica[$i];
    if ($i + 2 < count($tablica)) {
        echo ", ";
    }
}

?>