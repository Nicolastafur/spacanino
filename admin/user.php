<?php

require("../conexion/conexion.php");

$consult = "SELECT * FROM usuario,tipo_usu WHERE usuario.id_tipo=tipo_usu.id_tipo";
$rest = $base_de_datos->prepare($consult);
$rest->execute();
$camb = $rest->fetchAll();
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
    <title>Usuarios</title>

</head>

<body>


    <div class="menu">

        <span><a href="index.php">Home</a></span>
        <span><a href="user.php">Usuarios</a></span>
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
        <a href="crearu.php" class="noselect">
            Registrar

            <div id="circle"></div>

        </a>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Tipo de usuario</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Clave</th>
                    <th colspan="3">Accion</th>
                </tr>
            </thead>

            <?php
            foreach ($camb as $move) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $move->id_usu ?></td>
                        <td><?php echo $move->tipo ?></td>
                        <td><?php echo $move->usuario ?></td>
                        <td><?php echo $move->nombre_usu ?></td>
                        <td><?php echo $move->apellido_usu ?></td>
                        <td><?php echo /*$heren->passeord*/ "XXXX" ?></td>
                        <td>
                            <a class="btn btn-primary" href="./eliminar.php?id=<?php echo $move->id_usu ?> & nomb=<?php echo $move->nombre_usu ?> & email=<?php echo $move->correo ?> & apel=<?php echo $move->apellido_usu ?> & usua=<?php echo $move->usuario ?>">
                                eliminar
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="./editar.php?id=<?php echo $move->id_usu ?> & nomb=<?php echo $move->nombre_usu ?> & email=<?php echo $move->correo ?> & apel=<?php echo $move->apellido_usu ?> & usua=<?php echo $move->usuario ?>">
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