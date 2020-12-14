<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>-:CIV:- Centro de información veterinaria</title>

  <link rel="icon" href="../../assets/icon/icon.png">

  <!-- bootstrap integrado -->
  <link rel="stylesheet" href="../../css/bootstrap_css/bootstrap.min.css">

	<link rel="stylesheet" href="../../css/styles_homepage_css.css">

  <!-- Libreria de animaciones-->
  <link rel="stylesheet" href="../../css/animate.css">
  
</head>
<body>

	<!--Para que solo deje ver a los usuarios registrados-->
	<!--Como es lo primero que leer el navegador reanuda la sesion
		que se creo para el usuario o inicie una nueva
		Rescata la informacion de la variable super global $_SESSION-->
	<?php

			session_start();

			if(!isset($_SESSION["visitante"])) { //Si no hay sesion de usuario
				header("Location: ../login.php");
			} else {

			}

	?>

<!--Barra de navegacion de bootstrap editada por mi :)-->
<header>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  		<!-- Navbar content -->
  		<a class="navbar-brand text-light mx-5" href="#">CIV</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link text-light mx-5" href="#">Inicio <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link text-light mx-5" href="../profile/profile.php">Perfíl</a>
     			 </li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle text-light mx-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          		Artículos
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
         		 		<a class="dropdown-item" href="#">Articulos destacados</a>
          				<a class="dropdown-item" href="#">Otros articulos</a>
          			<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="#">Otro articulo mas</a>
        			</div>
      			</li>
      			<li class="nav-item mx-1">
        			<a class="nav-link disabled" href="#">Ayuda</a>
      			</li>
    		</ul>

    	<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search">
     		 <button class="btn btn-outline my-2 my-sm-0" type="submit">Buscar</button>
    	</form>
 	  </div>
	</nav>

</header>

<article>
	<section>
		<div class="contenedor_articulos" style="width:80%; margin:auto; padding:20px; background-color:blue; max-width:800px; color:#fff;">
			<h2>En mantenimiento, mientras tanto puedes ver tu perfil :)</h2>
			<a class="mr-md-3" href="../../php/session_close.php">Cerrar_La_Sesión</a>
		</div>
	</section>
</article>
	
  <!--JS de bootstrap-->
  <script src="../../js/bootstrap_js/jquery-3.5.1.min.js"></script>
  <script src="../../js/bootstrap_js/popper.min.js"></script>
  <script src="../../js/bootstrap_js/bootstrap.min.js"></script>

</body>
</html>