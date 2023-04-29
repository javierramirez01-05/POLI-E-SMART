<?php
  $page_title = 'Editar bodega';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  //Display all catgories.
  $bodega = find_by_id('bodega',(int)$_GET['id']);
  if(!$bodega){
    $session->msg("d","Missing bodega id.");
    redirect('bodega.php');
  }
?>

<?php
if(isset($_POST['edit_bod'])){
  $req_field = array('bodega-name');
  validate_fields($req_field);
  $bod_name = remove_junk($db->escape($_POST['bodega-name']));
  if(empty($errors)){
        $sql = "UPDATE bodega SET name='{$bod_name}'";
       $sql .= " WHERE id='{$bodega['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Bodega actualizada con éxito.");
       redirect('bodega.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
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
   <div class="col-md-5">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Editando <?php echo remove_junk(ucfirst($bodega['name']));?></span>
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="edit_bodega.php?id=<?php echo (int)$bodega['id'];?>">
           <div class="form-group">
               <input type="text" class="form-control" name="bodega-name" value="<?php echo remove_junk(ucfirst($bodega['name']));?>">
           </div>
           <button type="submit" name="edit_bod" class="btn btn-primary">Actualizar bodega</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
