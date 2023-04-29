<?php
  $page_title = 'Agregar solicitud';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
   $all_usuarios = find_all('users');
   $all_repuesto = find_all('products');
   $all_categories = find_all('categories');
   
   $groups = find_all('solicitudes');
?>
<?php
  if(isset($_POST['add_solicitud'])){

   $req_fields = array('repuesto','descripcion','vehiculo','usuario');
   validate_fields($req_fields);

   if(empty($errors)){
				$repuesto   = remove_junk($db->escape($_POST['repuesto']));
       $descripcion   = remove_junk($db->escape($_POST['descripcion']));
       $vehiculo   = remove_junk($db->escape($_POST['vehiculo']));
	    $usuario   = remove_junk($db->escape($_POST['usuario']));
        $query = "INSERT INTO solicitudes (";
        $query .="repuesto,descripcion,vehiculo,usuario,estado";
        $query .=") VALUES (";
        $query .=" '{$repuesto}', '{$descripcion}', '{$vehiculo}', '{$usuario}','1'";
        $query .=")";
        if($db->query($query)){
          //sucess
          $session->msg('s'," La solicitud ha sido creada");
          redirect('add_solicitud.php', false);
        } else {
          //failed
          $session->msg('d',' No se pudo crear la solicitud.');
          redirect('add_solicitud.php', false);
        }
   } else {
     $session->msg("d", $errors);
      redirect('add_solicitud.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
<div class="col-md-12">
  <?php echo display_msg($msg); ?>
  </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Agregar solicitud</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action="add_solicitud.php">
		  
		   <div class="form-group">
		   <div class="row">
			<div class="col-md-6">
                    <select class="form-control" name="repuesto">
                      <option value="">Selecciona tipo de repuesto</option>
                    <?php  foreach ($all_repuesto as $re): ?>
                      <option value="<?php echo (string)$re['name'] ?>">
                        <?php echo $re['name'] ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
				  <br>
				    <div class="col-md-6">
                    <select class="form-control" name="usuario">
                      <option value="">Selecciona un usuario</option>
                    <?php  foreach ($all_usuarios as $us): ?>
                      <option value="<?php echo (string)$us['username'] ?>">
                        <?php echo $us['username'] ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
				  <br>
				  <div class="col-md-6">
                    <select class="form-control" name="vehiculo">
                      <option value="">Selecciona una vehiculo</option>
                    <?php  foreach ($all_categories as $cat): ?>
                      <option value="<?php echo (string)$cat['name'] ?>">
                        <?php echo $cat['name'] ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
				 
				  </div>
			  </div>
			   <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
            </div>
            
			
            <div class="form-group clearfix">
              <button type="submit" name="add_solicitud" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
