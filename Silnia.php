<?php

$n = 6;

    function silnia($n) {
        $wynik = 1;
            for ($i = 1; $i <= $n; $i++) {
        $wynik *= $i;
        }
        
    return $wynik;
}


echo silnia($n);

?>