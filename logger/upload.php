<?php
include 'logger.php';

$uploadDir = 'upload';
$allowedExtensions = ['pdf', 'docx', 'txt', 'jpg', 'png', 'gif'];

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

function removePolishChars($text) {
    $polish = ['ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż', 'Ą', 'Ć', 'Ę', 'Ł', 'Ń', 'Ó', 'Ś', 'Ź', 'Ż'];
    $replace = ['a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z', 'A', 'C', 'E', 'L', 'N', 'O', 'S', 'Z', 'Z'];
    return str_replace($polish, $replace, $text);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileOriginalName = $_FILES['file']['name'];
    $fileExt = pathinfo($fileOriginalName, PATHINFO_EXTENSION);

    if (!in_array($fileExt, $allowedExtensions)) {
        logMessage("ERROR", "Nieobsługiwany typ pliku: $fileExt");
        header("Location: index.php");
        exit;
    }

    $filename = !empty($_POST['filename']) ? $_POST['filename'] : $fileOriginalName;
    $filename = removePolishChars($filename);
    $filename = time() . '_' . $filename;
    $filePath = "$uploadDir/$filename";

    if (move_uploaded_file($fileTmpName, $filePath)) {
        logMessage("INFO", "Plik \"$filename\" został przesłany pomyślnie");
    } else {
        logMessage("ERROR", "Nie udało się przesłać pliku \"$filename\"");
    }
}

header("Location: index.php");
exit;
