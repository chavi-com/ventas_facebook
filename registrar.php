<?php

include("db.php");

if (isset($_POST['save_task'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $trasportadora = $_POST['traspotadora'];
   /* echo $nombre;
    echo $apellido;
    echo $ciudad;
    echo $profecion;*/

    $query = "INSERT INTO facturas(nombre, apellido, telefono, ciudad, direccion, producto, precio, traspotadora) hVALUES ('$nombre', '$apellido', '$telefono', '$ciudad', '$direccion', '$producto', '$precio', '$trasportadora')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        
        die("query failed");

    }
    else{
        header("location: index.php");
    }


    
}


?>