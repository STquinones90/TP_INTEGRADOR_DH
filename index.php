<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> -->
    <?php
      $pageTitle = "Home";
      require_once 'head.php';
    ?>
    <link rel="stylesheet" href="css/style-index.css">
    <!-- <title>Home</title> -->
  </head>
  <body>

    <div class="main-container">

      <?php
       require_once("nav-bar.php");
      ?>
      <!-- <header> -->

        <!-- <nav class="navbar navbar-expand-sm navbar-expand-md navbar-dark fixed-top faq-temas justify-content-center">
          <button class="navbar-toggler" type="button" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center">
             <ul class="navbar-nav mr-auto categorias nav-pills nav-justified">
              <li class="nav-item">
                <a class="nav-link" href="#sesion">Configuración de cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#publicar">Publicar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#compra">Compra</a>
              </li>
           </ul>
          </div>
        </nav> -->
      <!-- </header> -->
      <br><br><br><br>
      <?php require_once("carousel.php") ?>

      <div class="carousel-product">
        <?php require_once("carousel-product.php") ?>
      </div>


      <!-- <div id="cocina" class="main-content-product">
            <div class="card" style="width: 18rem;">
              <img src=<?= $pdtos[1]['imagen'] ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $pdtos[1]['nombre'] ?></h5>
                <a href="detalle-producto.php?id=1" id="details" class="btn btn-outline-success">Detalles</a>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src=<?= $pdtos[1]['imagen'] ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $pdtos[1]['nombre'] ?></h5>
                <a href="detalle-producto.php?id=1" id="details" class="btn btn-outline-success">Detalles</a>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src=<?= $pdtos[1]['imagen'] ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $pdtos[1]['nombre'] ?></h5>
                <a href="detalle-producto.php?id=1" id="details" class="btn btn-outline-success">Detalles</a>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src=<?= $pdtos[1]['imagen'] ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $pdtos[1]['nombre'] ?></h5>
                <a href="detalle-producto.php?id=1" id="details" class="btn btn-outline-success">Detalles</a>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src=<?= $pdtos[1]['imagen'] ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $pdtos[1]['nombre'] ?></h5>
                <a href="detalle-producto.php?id=1" id="details" class="btn btn-outline-success">Detalles</a>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src=<?= $pdtos[1]['imagen'] ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $pdtos[1]['nombre'] ?></h5>
                <a href="detalle-producto.php?id=1" id="details" class="btn btn-outline-success">Detalles</a>
              </div>
            </div>




      </div>


      <div id="oficina" class="main-content-product">

        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/mesa-pizarra.jpg" alt="mesa-pizarra">
          <h2>Mesa pizarra</h2>
          <a href="detalle-producto.php?id=7"><span>Detalles</span></a>
          </div>

        </div>
        <div class="row" id="content-product">
          <div class="col-sm-12 col-md-2 col-lg-4">
          <img src="images/anotador-head.jpg" alt="anotador-head">
          <h2>Anotador de cabeza</h2>
          <a href="detalle-producto.php?id=8"><span>Detalles</span></a>
          </div>

        </div>
        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/basket-cesto.jpg" alt="basket-cesto">
          <h2>Cesto Basket-Office</h2>
          <a href="detalle-producto.php?id=9"><span>Detalles</span></a>
          </div>

        </div>

        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/cup-holder.jpg" alt="cup-holder">
          <h2>Sostén de taza</h2>
          <a href="detalle-producto.php?id=10"><span>Detalles</span></a>
          </div>

        </div>
        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/apoya-pies.jpg" alt="apoya-pies">
          <h2>Apoya pies de escritorio</h2>
          <a href="detalle-producto.php?id=11"><span>Detalles</span></a>
          </div>

        </div>
        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/aire-usb.jpg" alt="aire-usb">
          <h2>Aire frio/calor USB</h2>
          <a href="detalle-producto.php?id=12"><span>Detalles</span></a>
          </div>

        </div>

      </div> -->
      <nav class="social-links">
  			<ul>
  			</ul>
        <li><a href="https://twitter.com/?lang=es"><img src="ionicons/png/512/social-twitter.png" alt="logo-twitter"></a></li>
        <li><a href="https://ar.pinterest.com/"><img src="ionicons/png/512/social-pinterest.png" alt="logo-pinterest"></a></li>
        <li><a href="https://www.instagram.com/?hl=es-la"><img src="ionicons/png/512/social-instagram.png" alt="logo-instagram"></a></li>
  		</nav>
      <!-- <div class="up-link">
        <a href="#">  <img src="images/top-button.png" alt="to-top"></a>
      </div> -->
      <footer>
       <?php require_once("footer.php"); ?>
      </footer>

    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> <script src="js/bootstrap.min.js"></script> -->

  </body>
</html>
