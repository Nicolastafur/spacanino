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
    $tipo=$_GET["nomM"];
    
	
    

try{
$sql="UPDATE raza SET nombre_raza=:nm WHERE id_raza=:id";
$resultado=$base_de_datos->prepare($sql);  //$base guarda la conexión a la base de datos
$resultado->execute(array(":id"=>$id,":nm"=>$tipo));//asigno las variables a los marcadores
header('Location:tablaR.php');

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