<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
require("../conexion/conexion.php");

    $id=$_GET["id"];
    $tipo=$_GET["nomS"];
    $precio= $_GET["Pre"];
    
	
    

try{
$sql="UPDATE servicios SET nombre_servicio=:nS,precio_servicio=:Pre WHERE id_servicio=:id";
$resultado=$base_de_datos->prepare($sql);  //$base guarda la conexión a la base de datos
$resultado->execute(array(":id"=>$id,":nS"=>$tipo,"Pre"=>$precio));//asigno las variables a los marcadores
header('Location:tablaS.php');

$resultado->closeCursor();
}catch(Exception $e){
    //die("Error: ". $e->GetMessage());
    echo "F " . $id;
}finally{
    $base_de_datos=null;//vaciar memoria
}


?>
</body>
</html>