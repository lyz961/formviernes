<?php
include("form.php");


if (isset($_POST['registrar'])) {
    $nombre= $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio= $_POST['precio'];
    $url=$_POST['foto'];
    $descripcion= $_POST['descripcion'];



    $reg = new BaseDatos();
    $cons= "INSERT INTO productos(nombre,marca,precio,foto,descripcion) VALUES('$nombre','$marca','$precio','$url','$descripcion')";
    $reg-> agregarDatos($cons);

    header("Location: index.html");

}









?>