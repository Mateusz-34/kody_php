<?php

require_once "utils.php";
require_once "twig.php";

$conn = new mysqli('localhost', 'root', '', 'db2');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(count($_POST) > 0) {
    
    if($_FILES['image']['name'] !== '') {
        $filePath = move_image($_FILES['image']);
        $sql = sprintf('INSERT INTO users(name,surname,age,isactive,image_path,password,email) VALUES ("%s","%s",%d,%d,%s,"%s","%s")',
            $_POST['name'],$_POST['surname'],$_POST['age'],isset($_POST['isactive']),$_POST['image_path'],$filePath,$_POST['password'],$_POST['email']);
    }else {
        $sql = sprintf('INSERT INTO users(name,surname,age,isactive,password,email) VALUES ("%s","%s",%d,%d,"%s","%s")',
        $_POST['name'],$_POST['surname'],$_POST['age'],isset($_POST['isactive']),$_POST['image_path'],$_POST['password'],$_POST['email']);
    }

    $conn->query($sql);  

    header("Location: users.php");
}

echo $twig->render('user_add.html.twig');