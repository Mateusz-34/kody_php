<?php 

echo "<form method='POST'>";
echo "<label>Ile </label>";
echo "<input type='number' name='Ile'>";
echo "<label>Slowo </label>";
echo "<input type='text' name='Slowo'>";
echo "<button type='submit'>Zapisz</button>";
echo "</form>";

$Ile = isset($_POST["Ile"]) ? $_POST["Ile"] : 0;
$Slowo = isset($_POST["Slowo"]) ? $_POST["Slowo"] : "";

for ($i = 0; $i < $Ile; $i++) {
    echo "$Slowo <br>";
}