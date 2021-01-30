<?php
	
	include "controller.php";
	session_start();
	$iniciar = new controller();
	$iniciar->borrar_datos();

?>