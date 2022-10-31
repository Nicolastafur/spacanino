
    
<?php
include("../conexion/conexion.php");
$id= $_GET['id'];

$eliminar = "DELETE  FROM servicios WHERE id_servicio = '$id' ";
$elimina = $base_de_datos->query($eliminar);

if($elimina){
    header("Location:tablaS.php");
}else{
    echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
}

?>