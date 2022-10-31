<?php

session_start();
require("../conexion/conexion.php");



$modi =                  $_GET['id'];
$_SESSION['cedu'] =      $modi;

try {
    $sql = "SELECT * FROM clientes WHERE id_cliente= :co";
    $result = $base_de_datos->prepare($sql);
    $result->execute(array(":co" => $modi));



    if ($editar = $result->fetch(PDO::FETCH_ASSOC)) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../css/form.css">
            <link rel="stylesheet" href="../css/admin.less">
            <title>Editar</title>
        </head>

        <body>
            <div class="menu">

                <span><a href="../admin/index.php">Home</a></span>
                <span><a href="./user.php">Usuarios</a></span>
                <span><a href="../recepcionista/index.php">Recepcionista</a></span>
                <span><a href="../client/index.php">Clientes<a></span>
                <span><a href="../auxiliar/index.php">Auxiliar<a></span>
                <span><a href="../mascotas/tablaM.php">Mascotas<a></span>
                <span><a href="../razas/index.php">Razas<a></span><span>
                    <a href="../servicios/tablaS.php">Servicios<a></span>
                <span><a href="../orden/index.php">Ordenes<a></span>
                <span><a href="../cerrar.php">Sign off<a></span>
            </div>

            <form action="upd.php" method="POST" class="form" style="height: 580px;">

                <div class="input-container ic1">
                    <input class="input" type="text" id="inp1" readonly name="cod" value="<?php echo $modi ?>">
                    <label id="lab1" class="placeholder">Id:</label>
                </div>
                <div class="input-container ic1">


                    <input class="input" type="text" id="inp2" name="nombre" value="<?php echo $editar['nombre_cliente'] ?>">
                    <label id="lab2" class="placeholder">Nombre:</label>

                </div>
                <div class="input-container ic1">

                    <input class="input" type="text" id="inp4" name="usua" value="<?php echo $editar['apellido_cliente'] ?>">
                    <label id="lab4" class="placeholder">Apellido:</label>
                </div>
                <div class="input-container ic1">


                    <input class="input" type="text" id="inp5" name="email" value="<?php echo $editar['celular'] ?>">
                    <label id="lab5" class="placeholder">Telefono:</label>
                </div>
                <div class="input-container ic1">


                    <input class="input" type="text" id="inp6" name="clave" value="<?php echo $editar['direccion'] ?>">
                    <label class="placeholder">Direccion:</label>
                </div>
                <button type="submit" id="bot" name="modi" class="submit">Modificar</button>
                <input type="hidden" name="formreg" value="1">
            </form>

        </body>

        </html>

<?php
    } else {
        echo "No existe";
    }



    $result->closeCursor();
} catch (Exception $e) {
    die("Error: " . $e->GetMessage());
} finally {
    $bd = null;
}
?>