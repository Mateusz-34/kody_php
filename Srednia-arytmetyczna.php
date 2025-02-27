<?php

$a = [1, -2, -4, 3, 6];

function aug(array $arg) {
    $temp = 0;

    for ($i = 0; $i < count($arg); $i++) {
        $temp += $arg[$i];
    }

    return $temp / count($arg);
}
 
echo aug($a);

?>