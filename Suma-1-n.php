<?php

$n = 10;

    function suma_liczb($n) {
        $suma = 0;
            for ($i = 1; $i <= $n; $i++) {
        $suma += $i;
    }
    return $suma;
}

echo suma_liczb($n);
?>