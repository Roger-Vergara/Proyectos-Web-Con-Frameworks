<?php 

    include "controller.php";

    session_start();

    if (!isset($_SESSION["visitante"])) {
        header("location: ../login.php");
    } else {

        $iniciar = new controller();
        $datos[0] = $iniciar->leer_datos("nombre");
        $datos[1] = $iniciar->leer_datos("apellido");
        $datos[2] = $iniciar->leer_datos("nombre_usuario");
        $datos[3] = $iniciar->leer_datos("telefono");
        $datos[4] = $iniciar->leer_datos("imagen");

    }


?>