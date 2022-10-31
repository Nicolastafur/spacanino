<?php
    require("../conexion/conexion.php");
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
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <title>Crear</title>
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
<form action="crear.php" method="get" class="form">

    
    <div class="input-container ic1">
        <input type="text" name="id" placeholder=" " class="input" >
        <div class="cut"></div>
        <label for="id" class="placeholder">Cedula</label>
    </div>

    <div class="input-container ic1">
                    <select id="tip" name="tip" scope="col" class="input" placeholder=" ">
  
                            <?php
		                        $sql= "SELECT * FROM tipo_usu"; 
		                        $resultado=$base_de_datos->prepare($sql);
		                        $resultado->execute(array());
		                        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		                            ?> 
                                    <option value="<?php echo($registro['id_tipo'])?>"> <?php echo($registro['tipo'])?>
                                <?php 
                                }
                                ?>
                    </select>
                    <div class="cut"></div>
<label for="tip" class="placeholder">Tipos</label>
    </div>


                    <div class="input-container ic1">
                    <input type="text" name="usua" placeholder=" "  class="input" >
                    <div class="cut"></div>
                    <label for="usua" class="placeholder" >Usuario</label>
                    </div>
                    <div class="input-container ic1">
                    <input type="text" name="clave" placeholder=" "  class="input" >
                    <div class="cut"></div>
                    <label for="clave" class="placeholder">Contraseña</label>
                    </div>
                    <div class="input-container ic1">
                    <input type="text" name="nomb" placeholder=" "  class="input" >
                    <div class="cut"></div>
                    <label for="nomb" class="placeholder" >Nombre</label>
                    </div>
                    <div class="input-container ic1">
                    <input type="teñxt" name="apel" placeholder=" "  class="input" >
                    <div class="cut"></div>
                    <label for="apel" class="placeholder">Apellido</label>
                    </div>
                    <div class="input-container ic1">
                    <input type="text" name="email" placeholder=" "  class="input" >
                    <div class="cut"></div>
                    <label for="email" class="placeholder">Email</label>
                    </div>
                    <div>
                   <button type="submit"  name="mod"value="Crear" class="submit">Crear</button>   
                    </div>
                    
                         
    </form>
</body>
</html>