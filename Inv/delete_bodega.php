<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $bodega = find_by_id('bodega',(int)$_GET['id']);
  if(!$bodega){
    $session->msg("d","ID de la bodega falta.");
    redirect('bodega.php');
  }
?>
<?php
  $delete_id = delete_by_id('bodega',(int)$bodega['id']);
  if($delete_id){
      $session->msg("s","Bodega eliminada");
      redirect('bodega.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('bodega.php');
  }
?>
