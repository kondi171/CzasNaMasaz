<?php
    session_start();
    require_once 'connect.php';

    $connect = new mysqli($host, $login, $password, $db);
    if($connect->connect_errno != 0) {
        $_SESSION['error'] = true;
        header("Location: ../index.php");
    } else {
        if(isset($_POST['pass1']) && isset($_POST['pass2'])){
            if($_POST['pass1'] == $_POST['pass2']) {
                $newPass = $_POST['pass1'];
                $update = "UPDATE `admin` SET `haslo` = '$newPass' WHERE `admin`.`id` = 1";
                $res = $connect->query($update);
                $_SESSION['success'] = true;
                unset($_SESSION['login']);
                unset($_SESSION['password']);
                header("Location: ../index.php");
                exit();
            } else {
                $_SESSION['error'] = true;
                header("Location: ../index.php");
                exit();
            }
            $connect->close();
        } else {
            header("Location: ../index.php");
            exit();
        }
    }
?>