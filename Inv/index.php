<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<br>
<div class="login-page">
<div  class="log">
      <img src="uploads\products\logo.png"/>
</div>
<br>
<br>
    <div class="text-center">
       <p>Bienvenido</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usario</label>
              <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Ingresar</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
<?php include_once('layouts/header.php'); ?>
<style>
  body{
    background-image: url("fondo.png"); 
    
  }
  .text-left{
    padding: 0 10px;
  }
  .log{
    margin: 2% auto;
    padding: 0 2px;
    position: relative;
  }
</style>
