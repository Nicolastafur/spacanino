<?php
require("../conexion/conexion.php");

if (isset($_POST['bt'])) {

    $apellido =                      $_POST['apellido'];
    $nombre =                        $_POST['nomb'];

?>

<?php
    $sql = "INSERT INTO servicios ( nombre_servicio,precio_servicio) values ( :no, :em)";
    $resultado = $base_de_datos->prepare($sql); //$base es el nombre de la conexión
    $resultado->execute(array(":no" => $nombre, ":em" => $apellido));
    echo "<script>alert('Se registro correctamente')</script>";
    echo "<script>window.location='./tablaS.php'</script>";
}

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
    <title>Registrar</title>
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

    <form method="post" class="form" style="height: 380px ; ">

        <div class="input-container ic1">
            <input id="inp2" name="nomb" type="text" placeholder=" " class="input">
            <div class="cut"></div>
            <label for="nomb" class="placeholder">Nombre</label>
        </div>
        <div class="input-container ic1">
            <input id="inp3" name="apellido" type="number" placeholder=" " class="input">
            <div class="cut"></div>
            <label for="apellido" class="placeholder">Precio</label>
        </div>
        <button id="bot" type="submit" name="bt" class="submit">Registrar</button>
    </form>

</body>

</html>