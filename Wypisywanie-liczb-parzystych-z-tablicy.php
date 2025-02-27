<?php

$a = [1 => 6, 4 => 5, 5 => 8, 11 => 2];
$a = array_values($a);

for($i = 0; $i < count($a); $i = $i + 2) {
    if ($a[$i] % 2 === 0) {
        echo $a[$i];
        if ($i + 2 < count($a)) {
            echo ", ";
        }
    }
}

?>