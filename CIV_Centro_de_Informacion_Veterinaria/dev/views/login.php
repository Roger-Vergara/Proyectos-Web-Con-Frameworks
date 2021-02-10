<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>.:CIV:. Inicio de sesión</title>
	<link rel="icon" href="../assets/icon/icon.png">

	<!-- bootstrap integrado -->
  <link rel="stylesheet" href="../css/bootstrap_css/bootstrap.min.css">

  <!-- Estilos del programador -->
	<link rel="stylesheet" href="../css/styles_login_css.css"> 
  
  <!-- Libreria de animaciones-->
	<link rel="stylesheet" href="../css/animate.css">

</head>
<body>

  <?php 

    session_start();
    if(isset($_SESSION["visitante"])){
        header("Location: homepage/civ_homepage.php");
    }

  ?>

<div class="fondo"></div>

<!-- Inicio de formulario bootstrap -->
<div>
  <form method="post" action="../php/verifying_existence_of_user.php" class="contenedor_formulario" id="formulario">
  	<h2 class="titulo_formulario">Bienvendio a CIV</h2>
    
      <label for="exampleInput"><b><big>Cédula</big></b></label>
      <input name="ciT" type="number" class="form-control" id="exampleInputCi" required="">
      <small class="texto_email">Su cédula nunca sera compartida con nadie</small>

    <!-- solo para scripts -->
    <div>
      <p class="contenedor_formulario_styles" id="contenedor_formulario_script"></p>
    </div>
    
      <label for="exampleInputPassword1"><b><big>Clave</big></b></label>
      <input name="claveT" type="password" required="" class="form-control" id="campo_clave">

    <br>
    <label class="contenedor_crear_cuenta"><small>¿No tienes cuenta?, ingresa</small>   <a class="crear_cuenta" href="form/form.php">aquí</a></label>
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

  </form>	

</div>
<!-- Fin de formulario bootstrap -->

<footer>
	<p class="texto_desarrollador" href="#">Con tecnología bootstrap 4, Programador © <a class="link_desarrolador" href="#">Roger Vergara</a></p>
</footer>

	<!-- Este scruipt verifica que en la clave, no se ingresan datos invalidos -->
  <script src="../js/login/verify_supported_key_login.js"></script>

  <!--JS de bootstrap-->
  <script src="../js/bootstrap_js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap_js/popper.min.js"></script>
  <script src="../js/bootstrap_js/bootstrap.min.js"></script>
  
  

</body>
</html>