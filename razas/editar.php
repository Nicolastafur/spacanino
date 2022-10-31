<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/editarusu.css">
	<title>Editar usuario</title>
</head>
<body>
<?php
	
	$busca=$_GET["id"];


try{
	$base_de_datos=new PDO("mysql:host=localhost;dbname=spacaninos", "root", "");//pdo es la clase
	$base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//muestra el tipo de error
	$base_de_datos->exec("set character set utf8");
//echo "Conexión exitosa";
    $sql="SELECT  * from raza  where id_raza=:id";//consulta con marcador, el marcador es :codigo

    $resultado=$base_de_datos->prepare($sql);//el objeto $base llama al metodo prepare que recibe por parametro la instrucción sql, el metodo prepare devuelve un objeto de tipo PDO que se almacena en la variable resultado
    $resultado->execute(array(":id"=>$busca));

	if($registro2=$resultado->fetch(PDO::FETCH_ASSOC)){
		
		?>
	        <h4 align="center">Editar Raza</h4>	
		<form action="update.php" method="GET">
        	<h5>N. de Raza:</h5><br>
				<input type="text" class="usua" readonly name="id" value="<?php echo $registro2['id_raza']?>">
            
        	<h5>Nombre de la raza:</h5><br>
				<input type="text" class="usua" name="nomM" value="<?php echo $registro2['nombre_raza']?>">
            <br>
                <input type="submit" class="btn" name="edita" class="guardar" value="Guardar">
	</form>

<?php
	}else{
		echo "No se encotro esa tipo de raza  con el  identificador $busca";
	}

$resultado->closeCursor();

}catch(Exception $e){
	die("Error: ". $e->GetMessage());

}finally{
	$base_de_datos=null;//vaciar memoria
}


?>

</form>
<script src="confirmacion.js"></script>
</body>
</html>