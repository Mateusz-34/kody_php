<?php
 
session_name('sesje');
session_start();
 
//unset($_SESSION['user']);
 
session_destroy();
 
echo $_SESSION['user'];