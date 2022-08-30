<?php

   include("db.php");

      if (isset($_POST['save_task'])){
    
    
    
           $nomb = $_POST['nombre'];
           $apell = $_POST['apellido'];
    $tele = $_POST['telefono'];
    $ciu = $_POST['ciudad'];
    $dir= $_POST['direccion'];
    $pro = $_POST['producto'];
    $pre = $_POST['precio'];
    $tras= $_POST['traspotadora'];
   /* echo $nombre;
    echo $apellido;
    echo $ciudad;
    echo $profecion;*/

    $query = "INSERT INTO clientes(id,nombre, apellido, correo) VALUES ('$tele'$nomb', '$apell',  '$tras')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        
        die("query failed");

    }
    else{
        header("location: index.php");
    }


    
}



?>