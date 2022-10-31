<?php

session_start();
require("../conexion/conexion.php");

$tip = $_SESSION['tip'];
$nombre = $_SESSION['nomb'];
$apellido = $_SESSION['apel'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/admin.less">

  <title>Administrador</title>

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

  <div>
    <center>
      <h1><?php echo $tip ?></h1>
    </center>

    <center>
      <h2><?php echo $nombre ?> <?php echo $apellido ?></h2>
    </center>
    <center>
      <div id="fecha"><a id="a" align="center">
          <h2 id="h2">Ha ingresado el</h2><?php include("../fecha.php");
                                          echo fechas(); ?>
        </a></div>
    </center>

  </div>
</body>

</html>