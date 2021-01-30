<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.:CIV:. Registro</title>

  <link rel="icon" href="../../assets/icon/icon.png">

  <!--CDN de Bootstrap 4-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Estilos del programador-->
  <link rel="stylesheet" href="../../css/styles_data_update.css">

  <!--Libreria de animacion-->
  <link rel="stylesheet" href="../../css/animate.css">

</head>
<body>

  <?php 

    session_start();
    if(!isset($_SESSION["visitante"])){
        header("Location: ../login.php");
    }

  ?>

 
<!--Es contenedor actua como fondo de la página web-->  
<div class="fondo"></div> 

<!--Formulario de bootstrap-->
<form class="formulario" action="../../php/data_update_profile.php" method="post" enctype="multipart/form-data" id="enviar_datos">
  <div div="row">
    <a href="../profile/profile.php" class="col-md-2"><b>Volver a Perfil</b></a>
  </div>

<div class="container"> <!-- El container sirbe para centrar nuestra todo dentro
del sistema de rejillas-->

  <!--La existencia de este div, es solo para generar una ventana informativa-->
  <div id="errores"></div>

  <div class="row">
    <h4 class="col-md-4"><b>Actualizar datos</b></h4>    
  </div>
  <br/>
  <div class="row">
      <label for="nombre"  class="col-md-2"><b>Nombre:</b></label>
      <input type="text" required="" name="nombre" class="form-control col-md-3" id="nombre">
      <label for="apellido" class="col-md-2"><b>Apellido:</b></label>
      <input type="text" required="" name="apellido" class="form-control col-md-3" id="apellido">
  </div>

  <br>

  <div class="row">
      <label for="nombre_usuario" class="col-md-2"><b>Nombre de usuario</b></label>
      <input type="text" required="" name="nombre_usuario" id="nombre_usuario" class="form-control col-md-3">
      <label for="correo" class="col-md-2"><b>Corréo:</b></label>
      <input type="email" required="" name="correo" id="correo" class="form-control col-md-3">
  </div>

  <br>

  <div class="row">
      <label for="telefono" class="col-md-2"><b>Teléfono</b></label>
      <input type="tel" required="" name="telefono" id="telefono" class="form-control col-md-3" value="+58">
      <label for="fecha_nacimiento" class="col-md-2"><b>Fecha de nacimiento</b></label>
      <input type="date" required="" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control col-md-3" value="1980-01-01">
  </div>

  <br>

  <div class="row">
      <label for="clave" class="col-md-2"><b>Clave</b></label>
      <input type="password" required="" name="clave" id="clave" class="form-control col-md-3">
      <label for="verificar_clave" class="col-md-2"><b>Repita la clave</b></label>
      <input type="password" required="" id="verificar_clave" class="form-control col-md-3">
  </div>

  <div class="row">

      <label for="foto" class="col-md-2"><b>Foto de perfil</b></label>
      <div class="input-group col-md-3">
          <input type="file" required="" class="custom-file-input" id="imagen" aria-describedby="inputGroupFileAddon01" lang="es" accept=".png,.jpg,.jpeg" name="imagen">
          <label class="custom-file-label" for="inputGroupFile01">Seleccione</label>
      </div>

</div>

  <br>

  <div class=submit
    <div class="col-md-2">
      <button type="submit" id="boton_enviar" class="btn">Registrar</button>
    </div>
  </div>
  
</div>

</form>

 <!--JS de bootstrap-->
  <script src="../../js/bootstrap_js/jquery-3.5.1.min.js"></script>
  <script src="../../js/bootstrap_js/popper.min.js"></script>
  <script src="../../js/bootstrap_js/bootstrap.min.js"></script>

  <!--Operaciones mias-->
  <script src="../../js/data_update/data_verification_update.js"></script>

</body>
</html>