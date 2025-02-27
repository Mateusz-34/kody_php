<?php

echo "<form method='POST'>";
for($i = 0; $i < 11; $i++) {
    echo "<label>Liczba $i</label>";
    echo '<input type="number" name="Liczba_'.$i.'">';
}

echo '<button type="submit">Wyslij</button>';
echo "</form>";

echo "<br/>";

$liczby = [];
for ($i = 0; $i < 11; $i++) {
    if (isset($_POST["Liczba_$i"])) {
        $liczby[] = floatval($_POST["Liczba_$i"]);
    }
}

if (count($liczby) > 0) {
    echo "Średnia: " . array_sum($liczby) / count($liczby);
    echo "<br/>";

    sort($liczby);
    echo "Posortowane: " . implode(', ', $liczby);
    echo "<br/>";

    echo "Min: " . $liczby[0];
    echo "<br/>";

    echo "Max: " . $liczby[count($liczby) - 1];
} else {
    echo "Brak danych do obliczeń.";
}
?>