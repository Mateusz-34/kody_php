<?php

$a = [1, 2, 3, 2, 1, 3];
 
function CountTriple(array $arg)
{
    $temp = 0;
    for ($i = 0; $i < count($arg); $i++) {
        if ($arg[$i] === 3) {
            $temp++;
        }
    }
    return $temp;
}

echo CountTriple($a);

?>