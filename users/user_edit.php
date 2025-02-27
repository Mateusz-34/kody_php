<?php

require_once "utils.php";
require_once "twig.php";
require "flashBag.php";

$conn = new mysqli('localhost', 'root', '', 'db2');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(count($_POST) > 0) {

    if($_FILES['image']['name'] !== '') {
        $filePath = move_image($_FILES['image']);
        $sql = 'UPDATE users SET name="'.$_POST['name'].
        '",surname="'.$_POST['surname'].'",age="'.$_POST['age'].'", image_path="'.$filePath.'" WHERE id='.$_GET['id'];
    }else {
        $sql = 'UPDATE users SET name="'.$_POST['name'].
        '",surname="'.$_POST['surname'].'",age="'.$_POST['age'].'" WHERE id='.$_GET['id'];
    }

    $conn->query($sql);  

    flashBagWrite("Dane zapisano poprawnie");

    header("Location: users.php");

}

$result = $conn->query("SELECT * FROM users WHERE id=".$_GET['id']);
$row = $result->fetch_assoc();

echo $twig->render('user_edit.html.twig',['row' => $row]);