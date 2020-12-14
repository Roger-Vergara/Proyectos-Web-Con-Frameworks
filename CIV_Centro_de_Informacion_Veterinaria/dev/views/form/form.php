<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>.:CIV:. Registro</title>

  <link rel="icon" href="../../assets/icon/icon.png">

  <!--CDN de Bootstrap 4-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Estilos del programador-->
  <link rel="stylesheet" href="../../css/styles_form_.css">

  <!--Libreria de animacion-->
  <link rel="stylesheet" href="../../css/animate.css">

</head>
<body>
 
<!--Es contenedor actua como fondo de la página web-->  
<div class="fondo"></div> 

<!--Formulario de bootstrap-->
<form class="formulario" method="post" action="../../php/called_to_insert.php" enctype="multipart/form-data">
  <div div="row">
    <a href="../login.php" class="col-md-2"><b>Volver a Inicio</b></a>
  </div>

<div class="container"> <!-- El container sirbe para centrar nuestra todo dentro
del sistema de rejillas-->

  <div class="row">
    <h4 class="col-md-2"><b>Registrate</b></h4>
  </div>
  <div class="row">
      <label for="nombre"  class="col-md-2"><b>Nombre:</b></label>
      <input type="text" name="nombre" class="form-control col-md-3" id="nombre">
      <label for="apellido" class="col-md-2"><b>Apellido:</b></label>
      <input type="text" name="apellido" class="form-control col-md-3" id="apellido">
  </div>

  <br>

  <div class="row">
      <label for="nombre_usuario" class="col-md-2"><b>Nombre de usuario</b></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control col-md-3">
      <label for="correo" class="col-md-2"><b>Corréo:</b></label>
      <input type="email" name="correo" id="correo" class="form-control col-md-3">
  </div>

  <br>

  <div class="row">
      <label for="telefono" class="col-md-2"><b>Teléfono</b></label>
      <input type="tel" name="telefono" id="telefono" class="form-control col-md-3" value="+58">
      <label for="fecha_nacimiento" class="col-md-2"><b>Fecha de nacimiento</b></label>
      <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control col-md-3" value="1980-01-01">
  </div>

  <br>

  <div class="row">
      <label for="clave" class="col-md-2"><b>Clave</b></label>
      <input type="password" name="clave" id="clave" class="form-control col-md-3">
      <label for="verificar_clave" class="col-md-2"><b>Repita la clave</b></label>
      <input type="text" id="verificar_clave" class="form-control col-md-3">
  </div>

  <div class="row">
      <label for="ci" class="col-md-2"><b>Cédula</b></label>
      <input type="number" name="ci" id="ci" class="form-control col-md-3">

      
      <div class="input-group col-md-5">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="imagen" aria-describedby="inputGroupFileAddon01" lang="es" accept=".png,.jpg,.jpeg" name="imagen">
          <label class="custom-file-label" for="inputGroupFile01">Foto de perfil</label>
        </div>
      </div>

</div>

  <br>

  <div class="row">
    <div class="col-md-2">
      <button type="submit" class="btn">Registrar</button>
    </div>
  </div>
  
</div>

</form>

 <!--JS de bootstrap-->
  <script src="../../js/bootstrap_js/jquery-3.5.1.min.js"></script>
  <script src="../../js/bootstrap_js/popper.min.js"></script>
  <script src="../../js/bootstrap_js/bootstrap.min.js"></script>

</body>
</html>