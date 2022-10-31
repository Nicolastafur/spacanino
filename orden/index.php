<?php
include_once '../conexion/conexion.php';
$orden = $base_de_datos->query('SELECT * FROM orden_servicio');
$datos = $orden->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/admin.less">
    <link rel="stylesheet" href="../css/tabla.css">

    <link rel="stylesheet" href="../css/boton.css">
</head>

<body>
    <div class="menu">

        <span><a href="../admin/index.php">Home</a></span>
        <span><a href="../admin/user.php">Usuarios</a></span>
        <span><a href="../recepcionista/index.php">Recepcionista</a></span>
        <span><a href="../client/index.php">Clientes<a></span>
        <span><a href="../auxiliar/index.php">Auxiliar<a></span>
        <span><a href="../mascotas/tablaM.php">Mascotas<a></span>
        <span><a href="../razas/index.php">Razas<a></span><span>
            <a href="../servicios/tablaS.php">Servicios<a></span>
        <span><a href="../orden/index.php">Ordenes<a></span>
        <span><a href="../cerrar.php">Sign off<a></span>
    </div>


    <div id="btn" style="margin-top: 5rem;">
        <a href="../detalle/index.php" class="noselect">
            Crear Orden

            <div id="circle"></div>

        </a>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Numero de orden</th>
                    <th>Cliente</th>
                    <th>Auxiliar</th>
                    <th>Recepcionista</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="contenido">




            </tbody>
        </table>
    </div>

    <script src="../json/orden.js"></script>
</body>

</html>