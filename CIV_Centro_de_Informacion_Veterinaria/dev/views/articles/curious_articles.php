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
  <title>.:CIV:. Articulos Curiosos</title>

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
           Articulos Curiosos
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">Cómo bañar a tu perro en 7 pasos</h2>
            <p class="blog-post-meta">Febrero 3, 2021</p>

            <hr class="linea1">

            <p> Para que mantengas impecable a tu mejor amigo y le des un cuidado de 10, en esta ocasión te diré cómo bañar a tu perro en 7 pasos. ¡Aprovecha esta actividad y fortalece la amistad y la lealtad del perrito que cura tu depresión!</p>

              <h3>Paso 1: Moja a tu perro con agua tibia</h3>
              <p>Recuerda que la temperatura del agua debe de estar templada. No fría, no caliente. Ya que te aseguraste de esto, cuida de no mojarle la cabeza o la cara y échale agua lentamente desde el cuello hasta la cola. Todo el pelaje debe quedar completamente mojado.</p>

              <br/>

              <h3>Paso 2: Aplica el champú</h3>
              <p>Elige un champú especial para perros y verifica que no contenga veneno para pulgas. No lo bañes con tu champú porque su anatomía, pelaje y piel son distintos y necesitan otro tipo de cuidados. Evita comprarle un champú con fragancias o colores artificiales porque lo pueden irritar y causar que desarrolle bacterias, parásitos, virus y ardor.</p>

              <br/>

              <h3>Paso 3: Talla bien el cuerpo de tu perro (del cuello para abajo)</h3>
              <p>Frota con champú, haz espuma y lava cuidadosamente sus patas, almohadillas, dedos, axilas, estómago, cola e ingle. Deja que el champú actúe en el cuerpo de tu mascota el tiempo indicado en la botella.</p>

              <h3>Paso 4: Enjuágalo las veces que sea necesario</h3>
              <p>Después del tiempo que indica la botella de champú, es momento de enjuagar a tu perro hasta que el agua salga cristalina. Cuida que no queden restos de champú en el pelaje de tu perro o de lo contrario le podría provocar ardor, comezón y una alteración en el pH de la piel.</p>

              <h3>Paso 5: Sécalo</h3>
              <p>Deja que se sacuda y cúbrelo con una toalla para secarlo. Algunas personas sacan a pasear a su perro para que se seque al aire libre mientras caminan; otros prefieren usar una secadora, pero yo creo que es una opción peligrosa porque puedes quemarlo, dañar sus oídos o ponerlo nervioso.</p>

              <h3>Paso 6: Limpia los oídos y la cara de tu perro</h3>
              <p>Si le pusiste tapones o algodón en los oídos, es momento de quitárselos para limpiar cuidadosamente sus oídos con una gasa o algodón. NO uses hisopos, pueden dañarle los tímpanos.</p>

              <h3>Paso 7: Cepilla el pelo de tu perro</h3>
              <p>El último paso de “cómo bañar a tu perro” es cepillar su pelo. Si tu perro tiene un pelaje abundante, lo ideal va a ser que lo cepilles mientras está húmedo, con esto evitarás que se le enrede y suelte pelo más adelante.</p>
          
          </div><!-- /.blog-post -->

    </main><!-- /.container -->

    <footer>
      <p class="texto_desarrollador" href="#">Con tecnología bootstrap 4, Programador © <a class="link_desarrolador" href="#">Roger Vergara</a></p>
    </footer>

</body>
</html>