<?php
require("../conexion/conexion.php");

if (isset($_POST['bt'])) {
    $apellido =                      $_POST['apellido'];
    $nombre =                        $_POST['nomb'];
    $telefono =                      $_POST['tel'];
    $direccion =                     $_POST['dir'];

?>
    <input type="number" name="idd" value="<?php echo $idu ?>">
<?php
    $sql = "INSERT INTO mascota ( id_raza,id_cliente,nombre_mascota,color) values ( :no, :em, :usu, :cl)";
    $resultado = $base_de_datos->prepare($sql); //$base es el nombre de la conexión
    $resultado->execute(array(":no" => $nombre, ":em" => $apellido, ":usu" => $telefono, ":cl" => $direccion));
    echo "<script>alert('Se registro correctamente')</script>";
    echo "<script>window.location='tablaM.php'</script>";
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

    <form method="post" class="form" style="height: 480px ; ">

        <div class="input-container ic1">
            <select name="nomb" placeholder=" " class="input">
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
            <div class="cut"></div>
            <label for="cod" class="placeholder">Raza</label>
        </div>
        <div class="input-container ic1">
            <select name="apellido" placeholder=" " class="input">
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
            <div class="cut"></div>
            <label for="cod" class="placeholder">Dueño</label>
        </div>
        <div class="input-container ic1">
            <input id="inp4" name="tel" type="text" placeholder=" " class="input">
            <div class="cut"></div>
            <label for="cod" class="placeholder">Nombre</label>
        </div>
        <div class="input-container ic1">
            <input id="inp5" name="dir" type="text" placeholder=" " class="input">
            <div class="cut"></div>
            <label for="cod" class="placeholder">Color</label>
        </div>
        <button id="bot" type="submit" name="bt" class="submit">Registrar</button>
    </form>

</body>

</html>