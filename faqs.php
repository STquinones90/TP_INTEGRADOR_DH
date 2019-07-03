
<!-- PROX: probar hacer un foreach para mostrar las preguntas y respuestas y tener un array con preguntas y respuesas en otro archivo -->
<?php  $pageTitle = "Preguntas Frecuentes" ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

    <?php   require_once 'head.php' ?>
    <link rel="stylesheet" href="css/stylefaq.css">
  </head>

<body class="faq-cuerpo">

    <?php require_once 'nav-bar.php'; ?>

<!--                        inicio de contenido FAQ            -->
<div class="accordion faq-tema" id="sesion">
  <h4>Configuracion de Cuenta</h4>
  <div class="card card-faq">
    <div class="card-header faq-pregunta-contenedor" id="headingUsuarioNuevo">
      <h2 class="mb-0">
        <button class="btn btn-link faq-pregunta" type="button" data-toggle="collapse" data-target="#usuarioNuevo" aria-expanded="true" aria-controls="collapseUsuarioNuevo">
          <h5>¿Cómo crear un usuario nuevo?</h5>
        </button>
      </h2>
    </div>

    <div id="usuarioNuevo" class="collapse" aria-labelledby="headingUsuarioNuevo" data-parent="#sesion">
      <div class="card-body faq-respuesta">
        Podés crear una cuenta rápidamente haciendo <strong><a class="nav-link active"  href="registrer.php">click acá. </a></strong>
        La única información que te vamos a pedir es una cuenta de correo electrónico válida y que elijas una contraseña.
        Luego de ingresar la información, te vamos a enviar un correo con un enlace para que puedas activar tu cuenta.
        Si necesitas ayuda con alguno de los pasos,  <a href="mailto:soporte.marketpalace@gmail.com"><strong>contactanos</strong></a>.
      </div>
    </div>
  </div>
  <div class="card card-faq">
    <div class="card-header faq-pregunta-contenedor" id="headingCambioContrasenia">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed faq-pregunta" type="button" data-toggle="collapse" data-target="#cambioContrasenia" aria-expanded="false" aria-controls="collapseCambioContrasenia">
          <h5>¿Cómo cambio mi contraseña?</h5>
        </button>
      </h2>
    </div>
    <div id="cambioContrasenia" class="collapse" aria-labelledby="headingCambioContrasenia" data-parent="#sesion">
      <div class="card-body faq-respuesta">
        ¡Modificar tu contraseña es muy fácil! Sólo tenés que seguir estos simples pasos:
        <ol>
          <li>Si es que no iniciaste sesión, ingresá a tu <strong><a class="nav-link active"  href="login.php">cuenta</a></strong></li>
          <li>Una vez que estés dentro de tu cuenta, hacé clic en "Mi Perfil".</li>
          <li>En el campo "Contraseña" hacé clic en "Cambiar".</li>
          <li>Ingresá y confirmá tu nueva contraseña, hacé clic en "Enviar" y ¡Listo!.</li>
        </ol>
        <br>Si luego de realizar todos los pasos, no pudiste cambiar tu contraseña, por favor  <a href="mailto:soporte.marketpalace@gmail.com"><strong>contactanos</strong></a> con nuestro equipo de Soporte.
      </div>
    </div>
  </div>
  <div class="card card-faq">
    <div class="card-header faq-pregunta-contenedor" id="headingNoRecibiConfirm">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed faq-pregunta" type="button" data-toggle="collapse" data-target="#noRecibiConfirm" aria-expanded="false" aria-controls="collapseNoRecibiConfirm">
          <h5>No recibí el mail de confirmación</h5>
        </button>
      </h2>
    </div>
    <div id="noRecibiConfirm" class="collapse" aria-labelledby="headingNoRecibiConfirm" data-parent="#sesion">
      <div class="card-body faq-respuesta">
        Por favor, revisá tu casilla de spam o correo no deseado.
        Si comprobás que aún no lo recibiste, por favor <a href="mailto:soporte.marketpalace@gmail.com"><strong>contactanos</strong></a> para verificar lo sucedido.
      </div>
    </div>
  </div>
</div>

<div class="accordion faq-tema" id="publicar">
  <h4>Publicar</h4>
  <div class="card card-faq">
    <div class="card-header faq-pregunta-contenedor" id="headingComoPublicar">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed faq-pregunta" type="button" data-toggle="collapse" data-target="#comoPublicar" aria-expanded="false" aria-controls="collapseComoPublicar">
          <h5>¿Cómo publico un producto?</h5>
        </button>
      </h2>
    </div>
    <div id="comoPublicar" class="collapse" aria-labelledby="headingComoPublicar" data-parent="#sesion">
      <div class="card-body faq-respuesta">
        Para poder publicar y gestionar tus avisos correctamente, necesitás registrar tu correo.

        Si aún no lo hiciste, Ingresá al siguiente <strong><a class="nav-link active" href="registrer.php">link</a></strong> y completá los datos.<br>
        <strong>Pasos para publicar tu anuncio:</strong>
        <ol>
          <li>Seleccioná "Ingresar" en el menú de navegación, en el margen superior, y completá los campos con tu mail y contraseña.</li>
          <li>Hacé clic en el botón "Vender".</li>
          <li>Seleccioná la categoría a la que corresponde tu producto o servicio.</li>
          <li>Añadí un título, fotos, y una descripción, contale a todos por qué tu anuncio es diferente. No olvides verificar tu información personal para que los compradores puedan contactarte.</li>
          <li>Agregá fotos de buena calidad, así como también un título y descripción atractivos.</li>
          <li>Hacé clic en "Publicar" al final de la página.</li>
          <li>¡Ya casi está listo! Tu anuncio va a estar disponible en muy pronto. Te vamos a enviar un email para confirmarte cuando esté online.</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="accordion faq-tema" id="compra">
  <h4>Compra</h4>
  <div class="card card-faq">
    <div class="card-header faq-pregunta-contenedor" id="headingAQuienComprar">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed faq-pregunta" type="button" data-toggle="collapse" data-target="#aQuienComprar" aria-expanded="false" aria-controls="collapseAQuienComprar">
          <h5>¿Cómo elegir a qué vendedor comprarle?</h5>
        </button>
      </h2>
    </div>
    <div id="aQuienComprar" class="collapse" aria-labelledby="headingAQuienComprar" data-parent="#compra">
      <div class="card-body faq-respuesta">
        Si estás buscando un <b>servicio</b>, te recomendamos que leas las opiniones de las personas que ya lo contrataron. Y si querés comprar un auto o un inmueble, siempre es bueno llamar al anunciante para coordinar una visita y sacarte todas las dudas sobre lo que querés comprar.
        <br><strong>Leé en detalle la publicación</strong>
        <br>Revisá atentamente toda la publicación: prestá atención a la descripción y a las fotos para estar seguro de las condiciones de venta que propone el vendedor.
        Si el producto es nuevo, asegurate de que tenga garantía y que puedas devolverlo en caso de ser necesario.
      </div>
    </div>
  </div>
</div>

<!--                       FIN de contenido  FAQ                -->

  </body>

  <?php require_once('footer.php'); ?>

</html>
