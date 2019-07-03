<?php
  $pageTitle = "Detalle de producto";

  // llamo a mi array de productos
  require_once 'productos.php';
  $error='';

  // logica para asignar al producto seleccionado por lo que viene por GET
  if (isset($_GET["id"]) && $_GET["id"] <= count($pdtos)) {
    foreach ($pdtos as $onePdto) {
      if ($onePdto["id"] == $_GET["id"]) {
        $elegido = $onePdto;
      }
    }
  }else{
    $error="<strong> No existe un producto con ese ID </strong>";
  }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php
    require_once 'head.php';
  ?>
    <link rel="stylesheet" href="css/style-detalle.css">
  </head>

  <body>
    <?php require_once('nav-bar.php'); ?>

          <!-- <div class="container-detalle">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3">
                        <a class= "nav-link" href="index.php"><h1 class="marca-detalle"><img src="images/logo.png" height="45px" width="55px" alt="logo"><strong>  market palace</strong></h1></a>
                        <div class="detalle-descripciones">
                          <p>Un lugar donde encontrás todo lo que querés</p>
                        </div>
                    </div>
                </div> -->

                <!-- contenedor del detalle -->
                <div class="contenedor-detalle">
                <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 mi-detalle-contenedor">
                            <!-- Como si fuera el 'header' del detalle -->
                            <div class="mi-cabecera-detalle">
                                <h3> Detalle de Producto</h3>
                            </div>
                            <!-- Aca va a ir el contenido en si       -->
                            <div class="mi-principal-detalle">
                              <!--       Titulo       -->
                              <h4 class="text-center"> <?php echo $elegido["nombre"] ?> </h4>
                              <!--       imagen       -->
                              <img src="<?php echo $elegido["imagen"] ?>" class="img-fluid rounded mx-auto imagen-producto" alt="imagen-producto">
                              <!--       detalle        -->
                              <div class="descripcion-detalle">
                                <?php if (isset($error)):
                                        echo $error;
                                 endif; ?>
                                <?php echo $elegido["descripcion"] ?>
                              </div>
                              <div class="text-left publicadoPor">
                                <hr>
                                <h5>Publicado por: <?= $elegido["publicadoPor"] ?></h5>
                              </div>
                              <!--          botón voler          -->
                              <a class=" btn btn-primary mi-boton" href="index.php">Volver</a>
                          </div>
                      </div>
                </div>
                </div>

  </body>
    <?php  require_once('footer.php');  ?>
</html>
