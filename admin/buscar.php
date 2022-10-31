<?php
    require_once ("../conexion/conexion.php");
    session_start()
?>

<?php
if($_POST['busca']== ""){
        echo"<script>alert('existen datos vacios')</script>";
    }

    elseif ($buscar = $_POST['busca']){
        
        $sql=("SELECT * FROM usuario WHERE id_usu=".$_POST["busca"]."");
        $resultado=$base_de_datos->prepare($sql);
        $resultado->execute(array());
        $registro=$resultado->fetch(PDO::FETCH_ASSOC);     
        if ($registro){

            $id=            $registro['id_usu'];
            $nombre=        $registro['nombre_usu'];
            $apellido=      $registro['apellido_usu'];
            $telefono=      $registro['usuario'];
            $direccion=     $registro['correo'];

        }

        else{
            echo"<script>alert('este documento no existe')</script>";
            echo'<script>window.location="./user.php"</script>';
        }
    }



?>
<?php
		                        $sql= "SELECT * FROM tipo_usu"; 
		                        $resultado=$base_de_datos->prepare($sql);
		                        $resultado->execute(array());
		                        $registro=$resultado->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/admin.less">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <title>Document</title>
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
<form action="./user.php" method="get" class="form" style="height: 700px;">
    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $id?>" class="input" >
        <div class="cut">Cedula</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $registro['tipo'];?>" class="input" >
        <div class="cut">Tipos</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $nombre?>" class="input" >
        <div class="cut">Nombre</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $apellido?>" class="input" >
        <div class="cut">Apellido</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $telefono?>" class="input" >
        <div class="cut">Usuario</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $direccion?>" class="input" >
        <div class="cut">Correo</div>
        <label for="id" class="placeholder"></label>
    </div>
    
    <button type="submit"  name="mod"value="Crear" class="submit">volver</button>   
</form>
</body>
</html>
