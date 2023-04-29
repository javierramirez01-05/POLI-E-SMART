<?php
  $page_title = 'Lista de Bodegas';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_bodega = find_all('bodega')
?>
<?php
 if(isset($_POST['add_bod'])){
   $req_field = array('bodega-name');
   validate_fields($req_field);
   $bod_name = remove_junk($db->escape($_POST['bodega-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO bodega (name)";
      $sql .= " VALUES ('{$bod_name}')";
      if($db->query($sql)){
        $session->msg("s", "Bodega agregada exitosamente.");
        redirect('bodega.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('bodega.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('bodega.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar bodega</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="bodega.php">
            <div class="form-group">
                <input type="text" class="form-control" name="bodega-name" placeholder="Nombre de la bodega" required>
            </div>
            <button type="submit" name="add_bod" class="btn btn-primary">Agregar bodega</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de bodegas</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Bodegas</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_bodega as $cat):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($cat['name'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_bodega.php?id=<?php echo (int)$cat['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_bodega.php?id=<?php echo (int)$cat['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
       </div>
    </div>
    </div>
   </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
