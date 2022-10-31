<?php
include_once '../conexion/conexion.php';

if (isset($_GET['numero_orden'])) {
    $id = $_GET['numero_orden'];
    $cliente = $_GET['id_cliente'];
    $detele1 = $base_de_datos->prepare('DELETE FROM temporal WHERE numero_orden=?');
    $data2 = $detele1->execute(array($id));
    $detele2 = $base_de_datos->prepare('DELETE FROM detalle WHERE numero_orden=?');
    $data3 = $detele2->execute(array($id));
    $detele = $base_de_datos->prepare('DELETE FROM orden_servicio WHERE numero_orden=?');
    $data1 = $detele->execute(array($id));



    header("Location:detalle.php?id_cliente=$cliente");
}
