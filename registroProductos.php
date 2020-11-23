<?php

    include("baseDatosProductos.php");
    
    if(isset($_POST["botonRegistro"])){
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];
    
    $transaccion = new baseDatosProductos();
    $consultaSQL = "INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombre', '$marca', '$precio', '$descripcion', '$foto')";
    $transaccion->agregarDatos($consultaSQL);

}



?>