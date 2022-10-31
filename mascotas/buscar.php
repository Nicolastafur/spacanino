<?php
    require_once ("../conexion/conexion.php");
    session_start()
?>

<?php
if($_POST['busca']== ""){
        echo"<script>alert('existen datos vacios')</script>";
    }

    elseif ($buscar = $_POST['busca']){
        
        $sql=("SELECT * FROM mascota WHERE id_mascota=".$_POST["busca"]."");
        $resultado=$base_de_datos->prepare($sql);
        $resultado->execute(array());
        $registro=$resultado->fetch(PDO::FETCH_ASSOC);     
        if ($registro){

            $id=            $registro['id_mascota'];
            $nombre=        $registro['id_raza'];
            $apellido=      $registro['id_cliente'];
            $telefono=      $registro['nombre_mascota'];
            $direccion=     $registro['color'];

        }

        else{
            echo"<script>alert('este documento no existe')</script>";
            echo'<script>window.location="./index.php"</script>';
        }
    }



?>
<?php
	$idp=$nombre;
	$sql="SELECT * FROM raza WHERE id_raza=:id";
	$resultado1=$base_de_datos->prepare($sql);
	$resultado1->execute(array(":id"=>$idp));
	$registro1=$resultado1->fetch(PDO::FETCH_ASSOC);

    $ide=$apellido;
	$sql="SELECT * FROM clientes WHERE id_cliente=:id";
    $resultado1=$base_de_datos->prepare($sql);
	$resultado1->execute(array(":id"=>$ide));
	$registro2=$resultado1->fetch(PDO::FETCH_ASSOC);
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

    <title>buscar</title>
</head>
<body>
<div class="menu">
<span><a href="../admin/index.php">Home</a></span>
<span><a href="../admin/user.php">Usuarios</a></span>
<span><a href="../recepcionista/index.php">Recepcionista</a></span>
<span><a href="../client/index.php">Clientes<a></span>
<span><a href="../auxiliar/index.php">Auxiliar<a></span>
<span><a href="../mascotas/tablaM.php">Mascotas<a></span>
<span><a href="../razas/index.php">Razas<a></span><span>
<a href="../servicios/tablaS.php">Servicios<a></span>
<span><a href="../orden/index.php">Ordenes<a></span>
<span><a href="../cerrar.php">Sign off<a></span>
</div>
<form action="./tablaM.php" method="get" class="form" style="height: 600px;">
    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $id?>" class="input" >
        <div class="cut">Id mascota</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $registro1['nombre_raza'];?>" class="input" >
        <div class="cut">Raza</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $registro2['nombre_cliente'];?>" class="input" >
        <div class="cut">Dueño</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $telefono?>" class="input" >
        <div class="cut">Nombre</div>
        <label for="id" class="placeholder"></label>
    </div>

    <div class="input-container ic1">
        <input type="text" name="id"  readonly=»readonly» placeholder="<?php echo $direccion?>" class="input" >
        <div class="cut">Color</div>
        <label for="id" class="placeholder"></label>
    </div>

    <button type="submit"  name="mod"value="Crear" class="submit">volver</button>   
            </form>
        </div>
    </div>
</body>
</html>
