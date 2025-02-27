<?php
 
session_name('auth');
session_start();
 
if (isset($_SESSION['auth']['login']) && !empty($_SESSION['auth']['login'])) {
 
    echo "<h1>Witaj, " . print_r($_SESSION['auth']['login'], true) . "</h1>";
    ?>
 
    <form action="sesja.php" method="POST">
        <button type="submit" name="akcja" value="usun">Usuń sesję</button>
        <button type="submit" name="akcja" value="kopiuj">Kopiuj sesję</button>
    </form>
 
    <?php
} else {
    ?>
    <form action="sesja.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <button type="submit">Wyślij</button>
    </form>
    <?php
}
?>