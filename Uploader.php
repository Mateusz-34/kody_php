<?php
$uploadDir = 'upload';

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
    $fileName = $_FILES['file']['name'];
    
    $fileName = removePolishChars($fileName);
    
    $fileName = time() . '_' . $fileName;
    
    $filePath = $uploadDir . '/' . $fileName;

    if (is_uploaded_file($fileTmpName)) {
        if (move_uploaded_file($fileTmpName, $filePath)) {
            echo "Plik został przesłany: <a href='$filePath'>$fileName</a>";
        } else {
            echo "Błąd przy przenoszeniu pliku.";
        }
    } else {
        echo "Błąd przesyłania pliku.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Uploader</title>
</head>
<body>
    <h2>Prześlij plik</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>