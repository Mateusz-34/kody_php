<?php

$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);

    $wynik = 1;
    foreach($tablica as $index => $value){
        $wynik = $wynik*$value;
    }
    echo $wynik;

?>