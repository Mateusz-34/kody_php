<?php
$uploadDir = 'upload';

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$files = array_diff(scandir($uploadDir), array('.', '..'));
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logger - Upload</title>
</head>
<body>
    <h2>Prześlij plik</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Nazwa pliku (opcjonalna): <input type="text" name="filename"></label><br>
        <input type="file" name="file" required><br>
        <button type="submit">Wyślij</button>
    </form>

    <h2>Lista plików</h2>
    <table>
        <tr>
            <th>Nazwa pliku</th>
            <th>Akcje</th>
        </tr>
        <?php foreach ($files as $file): ?>
            <tr>
                <td><?php echo htmlspecialchars($file); ?></td>
                <td>
                    <a href="deleteFilename.php?file=<?php echo urlencode($file); ?>" onclick="return confirm('Czy na pewno chcesz usunąć ten plik?');">
                        Usuń
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>