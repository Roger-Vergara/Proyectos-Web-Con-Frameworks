<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>.:CIV:. Perfil de usuario</title>

	<link rel="icon" href="../../assets/icon/icono.png">

	<link rel="stylesheet" href="../../css/bootstrap_css/bootstrap.min.css">

	<link rel="stylesheet" href="../../css/styles_profile_css.css">

</head>
<body>

	<?php 

        session_start();

        if(!isset($_SESSION["visitante"])) { //Si no hay sesion de usuario
            header("Location: ../login.php");
        } else {

        }

        require("../../php/profile_information.php");

	?>

    <div class="fondo"></div>

<div class="container">

	<div class="row">
		
            <div class="card">

            	<div class="acciones">
					<button class="btn atras" id="volver_atras">Volver atras</button> <button id="enviar_a_actualizacion_de_datos" class="btn actualizar">Actualizar perfil</button>
				</div>

                <div class="foto" height="300">
                    <img src="/CIV_centro_de_informacion_veterinaria/dev/tmp_files/<?php echo($datos[4])?>" alt="Fallo en la carga de la imagen">
                </div>

                <div class="info">
                    <div class="nombre_apellido">
                       <a target="_blank" href="#"><big><?php echo $datos[0]." - ".$datos[1]?></big></a>
                	</div>

                	<div class="nombre_usuario">
                		<a target="_blank" href="#"><?php echo $datos[2]?></a>
                	</div>

                	</br>

                	<div class="numero_telefono">
                		<p><?php echo $datos[3]?></p>
                	</div>

                    <div class="fecha_nacimiento">
                        <p><?php echo $datos[5]?></p>
                    </div>

                    <div class="correo">
                        <p><?php echo $datos[6]?></p>
                    </div>

                </div>

                <div class="botones">
                    <a class="btn btn-primary btn-twitter" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger" rel="publisher"
                       href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary" rel="publisher"
                       href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning" rel="publisher" href="#">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>

                <form class="acciones" action="../../php/delete_profile.php" method="post" id="formulario">
                    <input type="submit" class="btn atras" value="Borrar Perfil" />
                </form>
               

            </div>    

	</div>
</div>

  <script src="../../js/profile/sent_to_data_update_and sent_home.js"></script>
	
<!--JS de bootstrap-->
  <script src="../../js/bootstrap_js/jquery-3.5.1.min.js"></script>
  <script src="../../js/bootstrap_js/popper.min.js"></script>
  <script src="../../js/bootstrap_js/bootstrap.min.js"></script>

</body>
</html>