<?php
    include("form.php");
    if(isset($_POST['btn'])){
        $nombre = $_POST['Nombre'];
        $marca = $_POST['Marca'];
        $precio=$_POST['Precio'];
        $foto = $_POST['Foto'];
        $descripcion = $_POST['Descripcion'];
        $id=$_GET['id'];

        $bd = new Basedatos();
        $cons ="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',foto='$foto',descripcion='$descripcion' WHERE Idproducto='$id'";
        $bd->agregarDatos($cons);

        header("Location:showp.php");
    }



?>