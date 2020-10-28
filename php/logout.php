<?php
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['password'])){
		session_unset();
		header("Location: ../index.php");
		exit();
	} else header("Location: ../index.php");
?>