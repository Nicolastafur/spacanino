<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="#">
    <title>Panel  de  razas de  perros</title>
    <link href="../css/tablaR.css" rel="stylesheet" type="text/css">

</head>
<header>
    
 
</header>
<body>
    <?php
    
    include("../conexion/conexion.php");

    
    //--------------paginación-------------
    $registros=3;//indica que se van a ver 3 registro por página
    if(isset($_GET["pagina"])){
        if($_GET["pagina"]==1){
            header("Location:tablaM.php");
        }else{
            $pagina=$_GET["pagina"];
        }
    }else{
        $pagina=1;//muestra página en la que estamos cuando se carga por primera vez
    }
    
    $empieza=($pagina-1)*$registros;
        $sql_total="SELECT * FROM raza";

        $resultado=$base_de_datos->prepare($sql_total);

        $resultado->execute(array());
        $numfilas=$resultado->rowCount();
        $totalpagina=ceil($numfilas/$registros);

        $registros=$base_de_datos->query("SELECT * FROM raza LIMIT $empieza,$registros")->fetchALL(PDO::FETCH_OBJ);
    

    ?>
    
    <h3 align="center">Panel  de razas de perros</h3>
    <form action=" " method="post" autocomplete="off">
        <table border="2" align="center">
 
                <tr>
                    <th>N. de raza mascota</th>
                    <th>Nombre  del  tipo de razas</th>
                    
                
                </tr>
           
                <?php
                    foreach ($registros as $raza) :
                    ?>
                    <tr>
                        <td><?php echo $raza->id_raza?></td>
                    
                    
                        <td><?php echo $raza->nombre_raza?></td>
                    
                    
                        
                        <td>
				            <a href="delete.php?id=<?php echo $raza->id_raza?>" class="elimina">
					            <input type="button"  name="elimina" value="Eliminar">
				            </a>
                        </td>
                        <td>
				            <a href="editar.php?id=<?php echo $raza->id_raza?>" class="editar">
					            <input type="button"  name="editar" value="Editar">
				            </a>
                        </td>
                    </tr>

                    <?php
			            endforeach;
		
			        ?>
  
        </table>

    </form>
    <div class="formulario" align="center">
        <form action="registrar.php" method="get" >
        <div class="bg">


</div>
            <br>
           
            <input type="varchar" name="nomR" required><br>
            
            <br><input  type="submit" class="button" name="Registrar" value="Registrar">
            

        </form>
    </div>
    <script src="confirmacion.js"></script>
</body>

</html>
        

