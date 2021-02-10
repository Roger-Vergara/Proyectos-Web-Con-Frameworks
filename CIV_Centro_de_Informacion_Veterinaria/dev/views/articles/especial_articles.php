<?php 

    session_start();

    if(!isset($_SESSION["visitante"])) { //Si no hay sesion de usuario
        header("Location: ../login.php");
    } else {

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.:CIV:. Articulos de emergencia</title>

  <link rel="icon" href="../../assets/icon/icon.png">

  <link rel="stylesheet" href="../../css/bootstrap_css/bootstrap.min.css">

  <link rel="stylesheet" href="../../css/styles_especial_articles.css">

</head>
<body>

    <br/>
    <div class="fondo"></div>
    
    <main role="main">
          
        <div class="col-md-8 blog-main bg-primary text-white" style="text-align:center; width:100%; padding:10px; margin-right:auto; margin-left:auto;">

          <a class="volver" href="../homepage/civ_homepage.php">Volver</a>

          <h3 class="pb-3 mb-4 font-italic border-bottom">
           Articulos de emergencia
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">Tu perro no respira: RESPUESTA!</h2>
            <p class="blog-post-meta">Febrero 2, 2021</p>

            <hr class="linea1">

            <p> Si tu perro no está respirando, pero todavía conserva latidos cardiacos, procede a realizar los siguientes pasos:</p>

            <ol>
              <li>Antes de dar respiración artificial: abre la vía aérea jalando la cabeza con cuidado para que se estire el cuello. Hala la lengua suavemente hacia afuera hasta que esté plana (ver imagen 1). Revisa la garganta y verifica que no haya algún objeto bloqueando la vía. Si no está bloqueada, debes dar respiración artificial.</li>

               <br/>

              <img class="foto1" src="../../assets/img/foto1.png" width="200" title="ilustracion-de-ayuda">

              <br/>
              <br/>

              <p>Mantén al perro acostado en el piso y con el cuello extendido. Acuéstate al lado del perro, de manera que no tengas que torcer su cuello. Cierra el hocico de tu mascota con tus manos y sopla directamente en su naríz como si estuvieras inflando un globo, hasta que veas al pecho inflarse. Es importante que no soples demasiado fuerte, sino que lo hagas lentamente, porque podrías dañar los pulmones.</p>

              <li>La cantidad de aire que soples va a depender del perro. Entre más grande, más aire, y entre más pequeño, menos aire. El movimiento del pecho debe ser natural.
              </li>

              <br/>

              <li>Una vez que el pecho se infle, administra una respiración cada 4-5 segundos</li>

            </ol>
          
          </div><!-- /.blog-post -->

          <hr class="linea1">

          <div class="blog-post">
            <h2 class="blog-post-title">Intoxicación: RESPUESTA!</h2>
            <p class="blog-post-meta">Diciembre 4, 2020</p>

            <hr class="linea1">

            <p>Si bien el principal consejo en estos casos es llevarle lo más rápido posible al veterinario para que lo examine y determine la causa de su malestar, podemos también practicarle los primeros auxilios en casa. Las técnicas o recetas que usaremos dependerán mucho del tipo de intoxicación, por lo que es clave conocer la causa, ya que pueden salvarle la vida al animal.</p>

            
            
            <ol>
              <h4><strong>Intoxicación en la piel</strong></h4>

              <li>En el caso de que la reacción se produzca en la piel por rozar una planta, es muy sencillo: baña a tu perro o gato con agua tibia y jabón neutro o apto para mascotas.</li>
              <br/>

              <h4><strong>Intoxicación por inhalación</strong></h4>
              <li>Si la intoxicación se debe a que inhaló alguna sustancia, lo mejor que puedes hacer es llevarle a un sitio al aire libre o, en su defecto, abrir bien las ventanas de la casa.</li>
              <br/>

              <h4><strong>Intoxicación por alimentos</strong></h4>
              <li>Si tu mascota se ha intoxicado al consumir alguna sustancia peligrosa, necesitará expulsarla a través del vómito, el cual se puede inducir de diferentes maneras:</li> 

            </ol>
            <ul>
                  <li>Para hacer vomitar a tu perro o gato puedes darle una cucharada de agua mezclada con sal, la cual se tendrá que introducir con una jeringuilla en la garganta. Solo se puede realizar dos veces este procedimiento y esperar a que surta efecto.</li>

                  <br/>

                  <li>Algunas personas también pueden dar a su mascota un remedio que les permita limpiar el intestino y evacuar la sustancia tóxica a través de las heces. Puedes optar entre carbón activado, leche con aceite o pan tostado, preferentemente quemado.</li>

                  <br/>

                  <li>Hasta que llegue el veterinario o lo llevemos al hospital, el animal debería permanecer lo más tranquilo posible. Para ello deja que se acueste en su colchón o cojín, y ponle un recipiente de agua fresca al lado por si desea beber.</li>
                </ul>
            
          </div><!-- /.blog-post -->

    </main><!-- /.container -->

    <footer>
      <p class="texto_desarrollador" href="#">Con tecnología bootstrap 4, Programador © <a class="link_desarrolador" href="#">Roger Vergara</a></p>
    </footer>
    

</body>
</html>