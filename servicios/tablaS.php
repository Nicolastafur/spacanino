<?php
session_start();
include_once("../conexion/conexion.php");

$cedu1 =                 $_SESSION['cedu'];
$nombre1 =               $_SESSION['nomb'];
$tipo =                  $_SESSION['tipo'];
$tip =                   $_SESSION['tip'];

$sentencia1 = "SELECT * FROM servicios";
$resultado = $base_de_datos->prepare($sentencia1);
$resultado->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/admin.less">
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="stylesheet" href="../css/buscar.css">
    <link rel="stylesheet" href="../css/boton.css">
    <title>Servicios</title>

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

    <div id="cover">
        <form method="post" action="buscar.php">
            <div class="tb">
                <div class="td"><input type="text" placeholder="Search" required name="busca"></div>
                <div class="td" id="s-cover">
                    <button type="submit">
                        <div id="s-circle"></div>
                        <span></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div id="btn">
        <a href="registrar.php" class="noselect">
            Registrar

            <div id="circle"></div>

        </a>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>

                    <th>N. de servicio</th>
                    <th>Servicio</th>
                    <th>Precio</th>
                    <th colspan="3">Accion</th>
                </tr>
            </thead>

            <?php
            foreach ($resultado as $move) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $move->id_servicio; ?></td>
                        <td><?php echo $move->nombre_servicio ?></td>
                        <td><?php echo $move->precio_servicio ?></td>
                        <td>
                            <a class="btn btn-primary" href="eliminar.php?id=<?php echo $move->id_servicio ?> & nomb=<?php echo $move->nombre_servicio ?>">
                                eliminar
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="modificar.php?id=<?php echo $move->id_servicio ?> & nomb=<?php echo $move->nombre_servicio ?>">
                                editar
                            </a>
                        </td>
                    </tr>
                </tbody>

            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>