<?php
    require_once 'connect.php';
    if(isset($_POST['id'])){
        $connect = new mysqli($host, $login, $password, $db);
        if($connect->connect_errno != 0) {
            $_SESSION['error'] = true;
            header("Location: ../index.php");
        } else {
            $identity = $_POST['id'];
            $delete = "DELETE FROM wiadomosci WHERE id = '$identity'";
            $connect->query($delete);
            header("Location: messages.php");
        }
        $connect->close();
    } else {
        $_SESSION['error'] = true;
        header("Location: ../index.php");
    }
?>