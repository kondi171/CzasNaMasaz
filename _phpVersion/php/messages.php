<?php
    session_start();
    if(isset($_SESSION['login']) && isset($_SESSION['password'])){
        require_once 'connect.php';

        $connect = new mysqli($host, $login, $password, $db);
        if($connect->connect_errno != 0) {
            $_SESSION['error'] = true;
            header("Location: ../index.php");
        } else {
            $select = "SELECT * FROM wiadomosci";
            $res = $connect->query($select);
            $times = mysqli_num_rows($res);
        }
        $connect->close();
    } else header('Location: ../index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CzasNaMasaż.pl - Wiadomości</title>
    <link rel="icon" type="image/png" href="../img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.min.css">
</head>
<body class="post">
    <div class="flex-post">
        <h1 class="header"><a href="../index.php">Czas<b>Na</b>Masaż<b>.pl</b></a></h1>
        <h2 class="all-messages">Masz <?php echo '<b class="primary-color">'.$times.' </b>' ?>Wiadomości</h2>
    </div>
    <?php 
        if($times <= 0) echo '<div class="no-messages">Brak Wiadomości!</div>';
        else {
            for ($i = 1; $i <= $times; $i++){
                $row = mysqli_fetch_assoc($res);
                $id = $row['id'];
                $imie = $row['imie'];
                $email = $row['email'];
                $telefon = $row['telefon'];
                $wiadomosc = $row['wiadomosc'];
                $data = $row['data'];
                echo '<div class="message-wrapper">';
                echo '<section class="message">';
                echo '<h2 class="message-title">Wiadomość '.$i.'</h2>';
                echo '<div class="name">';
                echo '<span>Imie:</span>';
                echo '<span>'.$imie.'</span>';
                echo '</div>';
                echo '<div class="mail">';
                echo '<span>E-mail:</span>';
                echo '<span>'.$email.'</span>';
                echo '</div>';
                echo '<div class="phone">';
                echo '<span>Telefon:</span>';
                echo '<span>'.$telefon.'</span>';
                echo '</div>';
                echo '<div class="date">';
                echo '<span>Data:</span>';
                echo '<span>'.$data.'</span>';
                echo '</div>';
                echo '<div class="message-content">';
                echo '<span>';
                echo '<div class="support-message-title">Wiadomość:</div>';
                echo '<p>'.$wiadomosc.'</p></span>';
                echo '</div>';
                echo '<form action="delete.php" method="POST">';
                echo '<input style="display:none;" value="'.$id.'" name="id">';
                echo '<button class="admin-btn">Usuń</button></form>';
                echo '</section>';
                echo '</div>';
            }
        }
    ?>
    <section class="admin-panel">
        <form class="message" action="changePass.php" method="POST">
            <h1>Zmiana Hasła</h1>
            <input type="password" name="pass1" placeholder="Podaj Nowe hasło">
            <input type="password" name="pass2" placeholder="Powtórz Nowe hasło">
            <button class="switch-password-btn">Zmień hasło</button>
        </form>
        <form action="logout.php" method="POST">
            <button class="logout-btn" >Wyloguj się</button>
        </form>
    </section>
</body>
</html>