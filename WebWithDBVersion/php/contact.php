<?php
    session_start();
    require_once "connect.php";
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
        $connect = new mysqli($host, $login, $password, $db);
        if($connect->connect_errno != 0) {
            $_SESSION['error'] = true;
            $_SESSION['dbProblem'] = true;
            header("Location: ../index.php");
            exit();
        } else {
            $name = $_POST['name'];
            $mail = $_POST['email'];
            $filterMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $validate = true;
            if ((strlen($name) < 3) || (strlen($name) > 30)){
                $validate = false;
                $_SESSION['errorName'] = "Imię musi posiadać od 3 do 20 znaków!";
            }
            if ((filter_var($filterMail, FILTER_VALIDATE_EMAIL) == false) || ($filterMail != $mail)){
                $validate = false;
			    $_SESSION['errorMail'] = "Podaj poprawny adres e-mail!";
            }
            if (strlen($phone) < 9 || strlen($phone) > 17){
			    $validate = false;
			    $_SESSION['errorPhone'] = "Podaj poprawny numer telefonu!";
		    }
            if ((strlen($message) < 5) || (strlen($nick) > 300)){
                $validate = false;
                $_SESSION['errorMessage']= "Wiadomośc musi posiadać od 5 do 300 znaków!";
            }
            $_SESSION['rememberName'] = $name;
            $_SESSION['rememberMail'] = $mail;
            $_SESSION['rememberPhone'] = $phone;
            $_SESSION['rememberMessage'] = $message;
            if($validate == true){
                $insert = "INSERT INTO wiadomosci VALUES (NULL, '$name', '$filterMail', '$phone', '$message', now())";
                if($res = $connect->query($insert)){
                    unset($_SESSION['rememberName']);
                    unset($_SESSION['rememberMail']);
                    unset($_SESSION['rememberPhone']);
                    unset($_SESSION['rememberMessage']);
                    $_SESSION['success'] = true;
                    header("Location: ../index.php");
                    exit();
                } else {
                    $_SESSION['error'] = true;
                    header("Location: ../index.php");
                    exit();
                }
            } else {
                $_SESSION['error'] = true;
                header("Location: ../index.php");
                exit();
            }
        }
    } else {
        $_SESSION['error'] = true;
        header("Location: ../index.php");
        exit();
    }
    $connect->close();
?>