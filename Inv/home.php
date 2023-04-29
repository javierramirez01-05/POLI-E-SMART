<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
        <div class="col-md-12">
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
                          <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/0ee69943-78ae-4925-a2ab-e6fc2862ec8d___c832d5a1e09ed00a6df0bcc999e33f31.png" alt="Producto 1">
                         
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/8b20f1e5-187a-41cf-849d-18b41ff44965___23beac91d7a98a6b104d53ff5da40775.png" alt="Producto 2">
                        
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/449ef48b-aacc-4b99-a5c4-4959dc44607b___f18bc7ee07722c0db1133ff365fdd28f.png" alt="Producto 3">
                          
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/f8e024c1-cc86-4874-89af-7dbbb589b269___83e22138784bf9a8d7dd1168396136d3.png" alt="Producto 4">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/5c617aa4-0af5-48af-aa90-b1fd0a833873___c7456ea71f1a3d10b910342c756d92f9.png" alt="Producto 5">
                         
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/797a392e-e2e6-4581-9075-2bb5ed26afad___485c66df222b070b6914645be16ff183.png" alt="Producto 6">
                         
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/895646e7-faad-4cee-8599-6d449446df1b___533070b2ea3c4dbb0dd526fc61675169.png" alt="Producto 7">
                      
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/assets/vtex.file-manager-graphql/images/cc51af92-c666-4075-ad14-b145caffa794___20254592b77fac3e49df6dcfb98375c7.png" alt="Producto 8">
                     
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
                <div class="col-md-3 ">
                    <div class="card">
                        <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/195956-300-300?v=1768083908&width=300&height=300&aspect=true" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Huevos AA rojos Nápoles x30und</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50. Precio en oferta: $30.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/215964-300-300?v=1768084870&width=300&height=300&aspect=true" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Salsa tomate Bary x1000g</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50. Precio en oferta: $30.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/186126-1600-1600?v=637813981180700000&width=1600&height=1600&aspect=true" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">pasta Clásica Spaghetti Doria x 1000 g.</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50. Precio en oferta: $30.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/195766-300-300?v=1768091953&width=300&height=300&aspect=true" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Salchicha Ranchera x14und x480g</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50. Precio en oferta: $30.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
