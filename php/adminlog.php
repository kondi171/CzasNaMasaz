<?php
    session_start();
    require_once 'connect.php';
    
    $connect = new mysqli($host, $login, $password, $db);
    if($connect->connect_errno != 0) {
        $_SESSION['error'] = true;
        header("Location: ../index.php");
    } else {
        if(isset($_POST['login']) && isset($_POST['password'])){
            $log = $_POST['login'];
            $pass = $_POST['password'];
            $log = htmlentities($log, ENT_QUOTES, "UTF-8");
            $pass = htmlentities($pass, ENT_QUOTES, "UTF-8");
            $select = sprintf("SELECT * FROM `admin` WHERE `login` = '%s' AND `haslo` = '%s'",
                      mysqli_real_escape_string($connect, $log),
                      mysqli_real_escape_string($connect, $pass));
            if($res = $connect->query($select)) {
                if($res->num_rows == 1){
                    $_SESSION['login'] = $log;
                    $_SESSION['password'] = $pass;
                    header("Location: messages.php");
                    exit();
                } else {
                    $_SESSION['error'] = true;
                    header("Location: ../index.php");
                    exit();
                 }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CzasNaMasaż.pl - Panel Admina</title>
    <link rel="icon" type="image/png" href="../img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.min.css">
</head>
<body class='log'>
    <section class="contact">
        <h1>Witaj Marcin! Chcę upewnić się, że to naprawdę ty :)</h1>
        <form class="overlay" method="POST">
            <label for="login">
                <span class="label-span">Login:</span>
                <input name="login" type="text" placeholder="Podaj login...">
            </label>
            <label for="password">
                <span class="label-span">Hasło:</span>
                <input name="password" type="password" placeholder="Podaj Hasło...">
            </label>
            <button class="main-btn" id="send-btn">Zaloguj</button>
        </form>
    </section>
</body>
</html>