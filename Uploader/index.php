<html>
    <head>
        <meta charset="UTF-8">
        <title>File Uploader</title>
    </head>

    <body>

    <h1>File Uploader</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <label for="file">
                <input type="file" name="file" />
            </label>
        </fieldset><br/>
        <button type="submit" name="send">Wyślij</button>
    </form>

    </body>
</html>

<?php

function prepareFilename($filename){
    $result = mb_strtolower($filename,'UTF-8');
    $result = str_replace(array('ą','ę','ć','ś','ż'),array('a','e','c','s','z'),$result);
    $result = str_replace(' ','_',$result);
    return $result;
}

$uploadDir = 'upload/';

if (!file_exists($uploadDir)){
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES['file'])) {
    $filename = prepareFilename($_FILES['file']['name']);
    $destination = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {
        echo "Plik został pomyślnie przesłany.";
    } else {
        echo "Wystąpił błąd podczas przesyłania pliku.";
    }
}
?>