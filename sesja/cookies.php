<?php
if(!isset($_COOKIE['clickCount'])){
?>
    <form method="POST">
        <label>Nazwa ciasteczka: </label>
        <input type="text" name="name">
        <button type="submit">Wyślij</button>
    </form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['name'])){
            $cookieName = $_POST['name'];
            $cookieValue = 0;
            $cookieExpire = time() + 3600;
            setcookie('clickCount', $cookieValue, $cookieExpire);
            header("Location: cookies.php");
            exit();
        }
    }
} else {
?>
    <h1><?php echo $_COOKIE['clickCount']; ?></h1>
    <form method="POST">
        <button type="submit" name="akcja" value="add">Dodaj klik</button>
        <button type="submit" name="akcja" value="write">Zapisz do pliku</button>
        <button type="submit" name="akcja" value="delete">Usuń</button>
    </form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['akcja'])){
            if($_POST['akcja'] === 'add'){
                $new = $_COOKIE['clickCount'] + 1; 
                setcookie('clickCount', $new, time() + 3600);
                header("Location: cookies.php");
                exit();
            } elseif($_POST['akcja'] === 'write'){
                $dane = print_r($_COOKIE, true);
                file_put_contents('cookie.txt', $dane);
                header("Location: cookies.php");
                exit();
            } elseif($_POST['akcja'] === 'delete'){
                setcookie('clickCount', '', time() - 3600);
                header("Location: cookies.php");
                exit();
            }
        }
    }
}
?>
