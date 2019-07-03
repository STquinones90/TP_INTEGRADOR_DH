<?php

require_once "productos.php";

 ?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div id="carouselExampleInterval" class="carousel slide carousel-product" data-ride="carousel">
            <h3 class="title-product text-left" id="cocina">Cocina</h3>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <!-- <div class="row">
                    <div id="prueba" class="col-12 col-md-4 col-lg-2"> -->
                    <?php foreach ($pdtos as $producto => $value): ?>

                    <?php endforeach; ?>
                    <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                          <img src=<?= $pdtos[0]['imagen'] ?> class="card-img-top img-carrousel" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $pdtos[0]['nombre'] ?></h5>
                            <a href="detalle-producto.php?id=0" id="details" class="btn btn-outline-success">Detalles</a>
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
                          <img src=<?= $pdtos[2]['imagen'] ?> class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $pdtos[2]['nombre'] ?></h5>
                            <a href="detalle-producto.php?id=2" id="details" class="btn btn-outline-success">Detalles</a>
                          </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                          <img src=<?= $pdtos[3]['imagen'] ?> class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $pdtos[3]['nombre'] ?></h5>
                            <a href="detalle-producto.php?id=3" id="details" class="btn btn-outline-success">Detalles</a>
                          </div>
                        </div>

                      </div>

                </div>
                <div class="carousel-item" data-interval="2000">
                  <div class="card-deck product-X">
                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[4]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[4]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=4" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[5]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[5]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=5" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[6]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[6]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=6" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[7]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[7]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=7" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>

                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
               <img src="images/arrow-left.svg">
            </a>

            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <img src="images/arrow-right.svg">
            </a>
          </div>
        </div>
    </div>
  </div>

  <br><br><br>


  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
          <h3 class="title-product-2 text-left" id="oficina">Oficina</h3>
          <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <!-- <div class="row">
                  <div id="prueba" class="col-12 col-md-4 col-lg-2"> -->
                  <?php foreach ($pdtos as $producto => $value): ?>

                  <?php endforeach; ?>
                  <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[8]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[8]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=8" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[9]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[9]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=9" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[10]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[10]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=10" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                        <img src=<?= $pdtos[11]['imagen'] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $pdtos[11]['nombre'] ?></h5>
                          <a href="detalle-producto.php?id=11" id="details" class="btn btn-outline-success">Detalles</a>
                        </div>
                      </div>

                    </div>
                  <!-- </div> -->
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
              <!-- </div> -->
              </div>
              <div class="carousel-item" data-interval="2000">
                <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                      <img src=<?= $pdtos[12]['imagen'] ?> class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $pdtos[12]['nombre'] ?></h5>
                        <a href="detalle-producto.php?id=12" id="details" class="btn btn-outline-success">Detalles</a>
                      </div>
                    </div>


                    <div class="card" style="width: 18rem;">
                      <img src=<?= $pdtos[13]['imagen'] ?> class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $pdtos[13]['nombre'] ?></h5>
                        <a href="detalle-producto.php?id=13" id="details" class="btn btn-outline-success">Detalles</a>
                      </div>
                    </div>


                    <div class="card" style="width: 18rem;">
                      <img src=<?= $pdtos[14]['imagen'] ?> class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $pdtos[14]['nombre'] ?></h5>
                        <a href="detalle-producto.php?id=14" id="details" class="btn btn-outline-success">Detalles</a>
                      </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                      <img src=<?= $pdtos[15]['imagen'] ?> class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $pdtos[15]['nombre'] ?></h5>
                        <a href="detalle-producto.php?id=15" id="details" class="btn btn-outline-success">Detalles</a>
                      </div>
                    </div>




                  </div>
              </div>
          </div>

          <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
             <img src="images/left-arrow.svg">
          </a>

          <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
            <img src="images/right-arrow.svg">
          </a>
        </div>
      </div>
  </div>
</div>

    <br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
