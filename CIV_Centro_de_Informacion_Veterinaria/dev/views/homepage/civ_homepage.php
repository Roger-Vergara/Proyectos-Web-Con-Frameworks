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

<div class="fondo"></div>

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

</br>

 <main class="container">
 
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-primary">
    <div class="col-md-6 px-0">
      <h1 class="display-5 font-arial">Bienvenido al centro de informacion veterinaria CIV <img src="../../assets/icon/icon.png" width="80px"></img></h1>
      <p class="lead my-3">Informacion esencial para sus mascotas...</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continuar leyendo...</a></p>
    </div>
  </div>

<!--Articulos relacionados-->
<div class="row mb-2">

	<!--Caja 1-->

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Ayuda de emergencia</strong>
          <h3 class="mb-0">Articulos especiales</h3>
      </br>
          <p class="card-text mb-auto">¿Tu mascoto sufrio una herida?, ¿No despierta?</p>
          <a href="#" class="stretched-link">Entrar en la sección</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Has click aqui</title><rect width="100%" height="100%" fill="#0d6efd"/><text x="40%" y="50%" fill="#eceeef" dy=".3em">Accede</text></svg>

        </div>
      </div>
    </div>

    <!--Caja 2-->

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="pd-inline-block mb-2 text-success">Cuidado de tus mascotas</strong>
          <h3 class="mb-0">Articulos curiosos</h3>
        </br>
          <p class="mb-auto">¿Cuando debo vacunar a mi mascota?</p>
          <a href="#" class="stretched-link">Entrar en la sección</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Has click aqui</title><rect width="100%" height="100%" fill="#0d6efd"/><text x="40%" y="50%" fill="#eceeef" dy=".3em">Accede</text></svg>
        </div>
      </div>
    </div>

  </div>

  <article>
	<section>
		<div class="contenedor_articulos" style="width:80%; margin:auto; padding:20px; background-color:blue; max-width:800px; color:#fff;">
			<h2>En mantenimiento, mientras tanto puedes ver tu perfil :)</h2>
			<a style="color:#fff;" class="mr-md-3" href="../../php/session_close.php">Cerrar_La_Sesión</a>
		</div>
	</section>
</article>

</main>	

<style>
	
	.rounded {
		background-color:#fff;
	}

	.rounded:hover{
		transition: 500ms ease;
	}

	.rounded:hover{
		background-color:#B3E5FC;
	}

	.stretched-link:hover {
		color:red;
	}

	.fondo {
	background:url("../../assets/img/background-2.jpg");
	background-size:100%; 
    -webkit-filter: blur(3px);
    -moz-filter: blur(3px);
    -o-filter: blur(3px);
    -ms-filter: blur(3px);
    filter: blur(5px);
    position:fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index:-100; 
}



</style>
	
  <!--JS de bootstrap-->
  <script src="../../js/bootstrap_js/jquery-3.5.1.min.js"></script>
  <script src="../../js/bootstrap_js/popper.min.js"></script>
  <script src="../../js/bootstrap_js/bootstrap.min.js"></script>

</body>
</html>