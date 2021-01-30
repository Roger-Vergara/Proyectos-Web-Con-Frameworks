<?php
	
	include "controller.php";
	session_start();
	$iniciar = new controller();
	$iniciar->actualizar_datos();

?>