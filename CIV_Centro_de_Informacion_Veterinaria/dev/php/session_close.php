<?php 

	session_start(); //Inicia la session
	session_destroy(); //La destruye

	header("Location: ../views/login.php"); //Te manda al login

?>