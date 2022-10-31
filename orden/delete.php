
<?php
include_once '../conexion/conexion.php';
if (isset($_GET['numero_orden'])) {
    $id = $_GET['numero_orden'];
    $elimina = $base_de_datos->prepare('UPDATE orden_servicio SET id_estado=2 WHERE numero_orden=?');
    $data = $elimina->execute(array($id));
    header('Location:index.php');
}
