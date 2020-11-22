<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCTOS</title>
   </head>
<body>
    <?php
    include("form.php");
    $mostrar= new Basedatos();
    $consultar= "SELECT * FROM productos WHERE 1";
    $resul= $mostrar->consultarDatos($consultar);
?>

<div>
    <div>

        <?php foreach ($resul as $result):?>                

            <img src="<?php echo $result['foto'];?>" alt="">

            <p><?php echo $result['nombre'];?></p>   
            <p><?php echo $result['marca'];?></p>  
            <p><?php echo $result['precio'];?></p>
            <p><?php echo $result['descripcion'];?></p> 

            <a onclick="ver()">editar</a>
            <a href="eliminar.php?id=<?php echo ($result['Idproducto']);?>">eliminar</a>

            <div id="modal<?php echo ($result['Idproducto']);?>">
                <form action="editar.php?id=<?php echo ($result['Idproducto']);?>"method="POST">
                    <span onclick="ocultar()">&times;</span>
                    <h2>MODIFICAR</h2>
                    <input type="text" name="Nombre" value="<?php echo $result['nombre'];?>">
                    <input type="text" name="Marca" value="<?php echo $result['marca'];?>">
                    <input type="text" name="Precio" value="<?php echo $result['precio'];?>">
                    <input type="text" name="Foto" value="<?php echo $result['foto'];?>">
                    <input type="text" name="Descripcion" value="<?php echo $result['descripcion'];?>">
                    <input type="submit" name="btn" value="Actualizar">
                </form>
            </div>    
        <?php endforeach ?>
    </div>
</div>
</body>
</html>
<script >
    function ver(){
        document.getElementById('modal<?php echo ($result['Idproducto']);?>').style.display='block';
    }
    function ocultar(){
        document.getElementById('modal<?php echo ($result['Idproducto']);?>').style.display='none';  
    }
</script>