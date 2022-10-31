<?php
include_once '../conexion/conexion.php';
session_start();
if (isset($_GET['documento'])) {
    $id = $_GET['documento'];
    $valit = $base_de_datos->prepare('SELECT * from clientes where id_cliente=?');
    $dat = $valit->execute(array($id));
    $delete = $base_de_datos->query('TRUNCATE TABLE temporal');

    if ($valor = $valit->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['id'] = $id;

        header("Location:detalle.php?id_cliente=$id");
    } else {
        $n = 'Usuario no registrado';
        echo $n;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/admin.less">
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

    <form action="" method="get" class="form" style="height: 280px ; ">

        <div class="input-container ic1">
            <input type="number" name="documento" placeholder=" " class="input">
            <div class="cut"></div>
            <label for="documento" class="placeholder">Ingrese su documento</label>
        </div>
        <button type="submit" class="submit">Validar</button>
    </form>

</body>

</html>