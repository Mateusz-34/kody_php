<?php
 
session_name('sesje');
session_start();
 
$_SESSION['user'] = 'test';
 
echo 'to jest zmienna sesyjna: ' . $_SESSION['user'] . '<br/>';
echo 'to jest identyfikator sesji: ' . $_COOKIE['sesje'];