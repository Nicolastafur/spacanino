 <?php
include("../conexion/conexion.php");
$id= $_GET['id'];

$eliminar1 = "DELETE  FROM raza WHERE id_raza = '$id' ";
$elim = $base_de_datos->query($eliminar1);

if($elim){
    header("Location:tablaR.php");
}else{
    echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
}

?>