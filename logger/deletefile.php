<?php
include 'logger.php';

$uploadDir = 'upload';

if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $filePath = "$uploadDir/$file";

    if (file_exists($filePath) && is_writable($filePath)) {
        if (unlink($filePath)) {
            logMessage("INFO", "Plik \"$file\" został usunięty.");
        } else {
            logMessage("ERROR", "Nie udało się usunąć pliku \"$file\".");
        }
    } else {
        logMessage("ERROR", "Plik \"$file\" nie istnieje lub brak uprawnień.");
    }
}

header("Location: index.php");
exit;
