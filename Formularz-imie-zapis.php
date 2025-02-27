<?php

echo "<form method='POST'>";
echo "<label>Imie </label>";
echo "<input type='text' name='imie'>";
echo "<button type='submit'>Wyslij</button>";
echo "</form>";

if(!empty($_POST['imie'])){
    echo "<h1>".htmlspecialchars($_POST['imie'])."</h1>";
    
    file_put_contents('./post.txt', $_POST['imie'] . PHP_EOL, FILE_APPEND);
    
    echo "<h2>Zawartość pliku:</h2>";
    echo "<pre>".htmlspecialchars(file_get_contents('./post.txt'))."</pre>";
}
?>