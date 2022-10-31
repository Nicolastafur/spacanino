<?php

session_start();
require("../conexion/conexion.php");



$modi =                  $_GET['id'];
$_SESSION['cedu'] =      $modi;

try {
    $sql = "SELECT * FROM mascota WHERE id_mascota= :co";
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

            <form action="upd.php" method="POST" class="form" style="height: 595px;">

                <div class="input-container ic1">
                    <input class="input" type="text" id="inp1" readonly name="cod" value="<?php echo $modi ?>">
                    <label id="lab1" class="placeholder">Id mascota:</label>

                </div>
                <div class="input-container ic1">

                    <select name="nombre" class="input">
                        <?php
                        $sql = "SELECT * FROM raza";
                        $resultado = $base_de_datos->prepare($sql);
                        $resultado->execute(array());
                        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            ?>
                            <option value="<?php echo $registro['id_raza']; ?>"><?php echo $registro['nombre_raza'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label id="lab2" class="placeholder">Raza:</label>
                </div>
                <div class="input-container ic1">


                    <select name="usua" class="input">
                        <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = $base_de_datos->prepare($sql);
                        $resultado->execute(array());
                        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            ?>
                            <option value="<?php echo $registro['id_cliente']; ?>"><?php echo $registro['nombre_cliente'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label id="lab4" class="placeholder">Dueño:</label>

                </div>
                <div class="input-container ic1">

                    <input class="input" type="text" id="inp5" name="email" value="<?php echo $editar['nombre_mascota'] ?>">
                    <label id="lab5" class="placeholder">Nombre:</label>
                </div>
                <div class="input-container ic1">

                    <input class="input" type="text" id="inp6" name="clave" value="<?php echo $editar['color'] ?>">
                    <label class="placeholder">Color:</label>
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