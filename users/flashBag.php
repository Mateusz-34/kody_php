<?php

session_start();

function flashBagWrite(string $message){
    $_SESSION['flashBag'] = $message;
}

function flashBagRead():?string {
    if(!empty($_SESSION['flashBag'])) {
        $message = $_SESSION['flashBag'];
        unset ($_SESSION['flashBag']);
        return $message;
    }

    return null;
}