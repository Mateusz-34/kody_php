<?php

$a = [1, 2, 3, 2, 1, 3];

for ($i = 0; $i < count($a); $i++) {
    echo $a[$i];
    if ($i < count($a) - 1) {
        echo ", ";
    }
}

?>