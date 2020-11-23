<?php

include("baseDatosProductos.php");

$id=$_GET["id"];
echo($id);

$transaccion= new baseDatosProductos();
$consultaSQL="DELETE FROM productos WHERE idProducto='$id' ";
$transaccion ->eliminarDatos($consultaSQL);

?>