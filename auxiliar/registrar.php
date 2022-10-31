<?php
    require("../conexion/conexion.php");

    if(isset($_POST['bt'])){
		$idu=                           $_POST['cod'];
		$apellido=                      $_POST['apellido'];
        $nombre=                        $_POST['nomb'];

		?>
		<input type="number" name="idd" value="<?php echo $idu?>">
		<?php 
		$sql="INSERT INTO auxiliar (id_auxiliar, nombre_auxiliar,apellido_auxiliar) values (:id, :no, :em)";
		$resultado=$base_de_datos->prepare($sql);//$base es el nombre de la conexión
		$resultado->execute(array(":id"=>$idu,":no"=>$nombre,":em"=>$apellido));
        echo"<script>alert('Se registro correctamente')</script>";
        echo"<script>window.location='index.php'</script>";
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

<span><a href="index.php">Home</a></span>
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

  
        <form method="post" class="form" style="height: 440px ;">

        <div class="input-container ic1">
        <input id="inp1" name="cod" type="number" placeholder=" "  class="input">
        <div class="cut"></div>
        <label for="cod" class="placeholder">Cedula</label>
        </div>
        <div class="input-container ic1">
        <input id="inp2" name="nomb" type="text" placeholder=" "  class="input">
        <div class="cut"></div>
        <label for="cod" class="placeholder">Nombre</label>
        </div>
        <div class="input-container ic1">
        <input id="inp3" name="apellido" type="text" placeholder=" "  class="input">
        <div class="cut"></div>
        <label for="cod" class="placeholder">Apellido</label>
        </div>
        <button id="bot" type="submit" name="bt" class="submit" >Registrar</button>
    </form>
    
</body>
</html>
