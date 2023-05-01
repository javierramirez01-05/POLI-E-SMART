<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}

  $get_productos = get_productos();
  print_r($get_productos);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 <!-- Agrega esto en la sección head de tu HTML -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center container">
        <div class="col-md-12 my-2">
            <!--  un slider con 3 imagenes -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/622b39a1-e534-485a-9fb1-f63d292980f7___cd67207338d9e9378bec6698a427c398.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/622b39a1-e534-485a-9fb1-f63d292980f7___cd67207338d9e9378bec6698a427c398.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/622b39a1-e534-485a-9fb1-f63d292980f7___cd67207338d9e9378bec6698a427c398.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col-ms-12  my-2">
            <div id="d1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/0ee69943-78ae-4925-a2ab-e6fc2862ec8d___c832d5a1e09ed00a6df0bcc999e33f31.png" alt="Producto 1">
                         
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/8b20f1e5-187a-41cf-849d-18b41ff44965___23beac91d7a98a6b104d53ff5da40775.png" alt="Producto 2">
                        
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/449ef48b-aacc-4b99-a5c4-4959dc44607b___f18bc7ee07722c0db1133ff365fdd28f.png" alt="Producto 3">
                          
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/f8e024c1-cc86-4874-89af-7dbbb589b269___83e22138784bf9a8d7dd1168396136d3.png" alt="Producto 4">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/5c617aa4-0af5-48af-aa90-b1fd0a833873___c7456ea71f1a3d10b910342c756d92f9.png" alt="Producto 5">
                         
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/797a392e-e2e6-4581-9075-2bb5ed26afad___485c66df222b070b6914645be16ff183.png" alt="Producto 6">
                         
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/895646e7-faad-4cee-8599-6d449446df1b___533070b2ea3c4dbb0dd526fc61675169.png" alt="Producto 7">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <img class="card-img-top" style="cursor: pointer;" onclick="mostrarAlerta()" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/cc51af92-c666-4075-ad14-b145caffa794___20254592b77fac3e49df6dcfb98375c7.png" alt="Producto 8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#d1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#d1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
          
                           
              
        </div>
        <div class="col-md-12 my-2">
            <!--  10 card para mostratrar productos -->
            <div class="row">
              
                <!-- un forear con los osguientes elemetos id, name, quantity, buy_price, sale_price, categorie_id, file_name, date, description, prom --> 
            <?php foreach ($get_productos as $data):?>

              <div class="col-md-3 ">
                    <div class="card">
                        <img class="card-img-top"  src="image/png/<?php echo $data['file_name'] ?>" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['name'] ?></h5>
                            <p class="card-text"><?php echo $data['description'] ?></p>
                            <p class="card-text">$<?php echo $data['sale_price'] ?></p>
                            <a href="#" class="btn btn-primary" onclick="mostrarAlertaBoton()">Comprar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

                
            </div>
            
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
      <script>
        function mostrarAlerta() {
            // Mostrar la alerta con SweetAlert
            Swal.fire({
                icon: 'warning',
                title: 'No hay de esa categorías en bodega'
            });
        }
        function mostrarAlertaBoton() {
            // Mostrar la alerta con SweetAlert
            Swal.fire({
                icon: 'success',
                title: 'Producto agregado al carrito'
            });
        }
      </script>
    </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
