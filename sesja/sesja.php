<?php

session_name('auth');
session_start();


if (isset($_POST['akcja'])) {
    $akcja = $_POST['akcja'];

    if ($akcja === 'usun') {

        unset($_SESSION['auth']);
        session_destroy();


        header("Location: index.php");
        exit();

    } elseif ($akcja === 'kopiuj') {

        $session_id = session_id();
        $session_data = print_r($_SESSION, true);


        $dane_do_zapisu = "SESSION_ID: $session_id\nZAWARTOŚĆ_NASZEJ_TABLICY_SESYJNEJ:\n$session_data";


        if (file_put_contents("sesja.txt", $dane_do_zapisu) === false) {
            echo "Błąd zapisu do pliku.";
        } else {
            echo "Dane sesji zostały zapisane do pliku `sesja.txt`.";
        }

        header("Location: index.php");
        exit();
    }
} elseif (isset($_POST['login']) && !empty($_POST['login'])) {
    $_SESSION['auth']['login'] = $_POST['login'];

    header("Location: index.php");
    exit();
} else {
    echo "Proszę wprowadzić login.";
}
