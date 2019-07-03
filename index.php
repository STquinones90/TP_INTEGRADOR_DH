<!-- PENDIENTES MAQUETADO
corregir las imagenes en el responsive del carrousel top
corregir el alto de las "card" y las alineaciones del boton
agregar un poco del stilo del login y registrer al index -->

<!DOCTYPE html>
<html lang="es" dir="ltr">

    <?php
      $pageTitle = "Home";
      require_once 'head.php';
    ?>

  </head>
  <body>

    <div class="main-container-index">

      <?php
       require_once 'nav-bar.php';
      ?>

      <br><br><br><br>
      <?php require_once("carousel.php") ?>

      <div class="carousel-product">
        <?php require_once("carousel-product.php") ?>
      </div>


      <nav class="social-links">
  			<ul>
  			</ul>
        <li><a href="https://twitter.com/?lang=es"><img src="ionicons/png/512/social-twitter.png" alt="logo-twitter"></a></li>
        <li><a href="https://ar.pinterest.com/"><img src="ionicons/png/512/social-pinterest.png" alt="logo-pinterest"></a></li>
        <li><a href="https://www.instagram.com/?hl=es-la"><img src="ionicons/png/512/social-instagram.png" alt="logo-instagram"></a></li>
  		</nav>

    <footer>
     <?php require_once("footer.php"); ?>
    </footer>

    </div>

  </body>
</html>
