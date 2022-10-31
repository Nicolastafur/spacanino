<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/editar.css">
    <title>Actualizar</title>
</head>
<body>

<?php
    require("../conexion/conexion.php");

    
		$idu=                           $_POST['cod'];
        $nombre=                        $_POST['nombre'];
        $usu=                           $_POST['usua'];

	try{
        $sql="UPDATE recepcionista SET  nombre_recepcionista=:no,apellido_recepcionista=:usu WHERE id_recepcionista=:id";
		$resultado=$base_de_datos->prepare($sql);//$base es el nombre de la conexión
		$resultado->execute(array(":id"=>$idu,":no"=>$nombre,":usu"=>$usu));
        echo"<script>alert('Se actualizo correctamente')</script>";
        echo"<script>window.location='index.php'</script>";
    

        $resultado->closeCursor();
    }catch(Exception $e){
        //die("Error: ". $e->GetMessage());
         echo "Ya existe la cédula " . $idu;
    }finally{
        $base=null;//vaciar memoria
    }
?>