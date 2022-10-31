<?php
require('../conexion/conexion.php');
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
    <?php
    $id = $_GET['id'];
    $email = $_GET['email'];
    $nombre = $_GET['nomb'];
    $apellido = $_GET['apel'];
    $user = $_GET['usua'];

    ?>

    <form action="modificar.php" method="get" class="form">
        <div class="input-container ic1">
            <input type="text" name="id" value="<?php echo $id ?>" readonly class="input">
            <label for="cod" class="placeholder">Doc</label>
        </div>
        <div class="input-container ic1">
            <select id="tip" name="tip" scope="col" class="input">
                <option>Seleccione..</option>
                <?php
                $sql = "SELECT * FROM tipo_usu WHERE id_tipo =1";
                $resultado = $base_de_datos->prepare($sql);
                $resultado->execute(array());
                while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?php echo ($registro['id_tipo']) ?>"> <?php echo ($registro['tipo']) ?>
                    <?php
                }
                    ?>
            </select>
            <label for="cod" class="placeholder">Doc</label>
        </div>
        <div class="input-container ic1">
            <input type="text" name="usua" value="<?php echo $user ?>" class="input">
            <label for="cod" class="placeholder">User</label>
        </div>
        <div class="input-container ic1">
            <input type="text" name="nomb" value="<?php echo $nombre ?>" class="input">
            <label for="cod" class="placeholder">Nombre</label>
        </div>
        <div class="input-container ic1">
            <input type="teñxt" name="apel" value="<?php echo $apellido ?>" class="input">
            <label for="cod" class="placeholder">Apellido</label>
        </div>
        <div class="input-container ic1">
            <input type="text" name="email" value="<?php echo  $email ?>" class="input">
            <label for="cod" class="placeholder">Email</label>
        </div>
        <button type="submit" class="submit" name="mod">Modificar</button>



    </form>
</body>

</html>