<?php

session_start();

$_SESSION['date'] = time();

echo $_SESSION['date'];