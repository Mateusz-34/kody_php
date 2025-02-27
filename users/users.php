<?php

require_once "twig.php";
require "flashBag.php";

$conn = new mysqli('localhost', 'root', '', 'db2');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


function isactive(int $status) {
    return $status === 1? "TAK":"NIE";
}

$result = $conn->query("SELECT * FROM users");

$results = [];
 while($row = $result->fetch_assoc()) {
    $results[] = $row;
}

echo $twig->render('users.html.twig', ['results' => $results,'message' => flashBagRead()]);