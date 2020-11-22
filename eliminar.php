<?php

    include("form.php");

    $del =$_GET['id'];
    $l= new Basedatos();
    $c="DELETE FROM productos WHERE Idproducto='$del'";
    $l->eliminarDatos($c);

    header("Location:showp.php");
    








?>