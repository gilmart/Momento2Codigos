<?php

include("baseDatosProductos.php");

$id=$_GET["id"];
if(isset($_POST["botonEditar"])){

    $nombre=$_POST["nombreEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $precio=$_POST["precioEditar"];
   
$transaccion = new baseDatosProductos();
$consultaSQL="UPDATE productos SET nombre='$nombre', precio='$precio', descripcion='$descripcion' WHERE idProducto='$id'";
$transaccion->editarDatos($consultaSQL);

header("location:listaProductos.php");

}
?>
