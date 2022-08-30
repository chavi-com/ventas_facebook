<?php
    include("db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM facturas WHERE id = $id";
        $resultado = mysqli_query($conn, $query);
        if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado);
            $nom = $row['nombre'];
            $ape = $row['apellido'];
            $tel = $row['telefono'];
            $ciu = $row['ciudad'];
            $dir = $row['direccion'];
            $pro = $row['producto'];
            $pre = $row['precio'];
            $tra = $row['traspotadora'];
        }


    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $nombA = $_POST['nombre'];
        $apeA = $_POST['apellido'];
        $telA = $_POST['telefono'];
        $ciuA = $_POST['ciudad'];
        $dirA = $_POST['direccion'];
        $proA = $_POST['producto'];
        $preciA = $_POST['precio'];
        $trasA = $_POST['traspotdora'];

        $query = "UPDATE facturas SET nombre='$nombA',apellido='$apeA',telefono='$telA',ciudad='$ciuA',direccion='$dirA', producto='$proA',precio='$preciA',traspotadora='$trasA', WHERE id =$id ";
        mysqli_query($conn, $query);
        header("Location: index.php");
    }

?>    
    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="widh=device-widt, inditial scale=1.0">
		<link rel="stylesheet" type="text/css" href="stilecrud.css">
	<title>ventas </title>
	<script src='archi.js'></script>
</head>

<body>

<div class="todo">    
    <h1>FACTURACION </h1>


<form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST"  class ="formulario">

   <section class="form-register" >
	<h4>ACTUALIZAR</h4>
	<input class="controls" type="text" name="nombre" value="<?php echo $nom ?>" placeholder="actualisar nombre" required="" >
	<input class="controls" type="text" name="apellido" value="<?php echo $ape ?>" placeholder="actualisar apellido" required="">
    <input class="controls" type="text" name="telefono" value="<?php echo $tel ?>" placeholder="actualisar telefono" required="">
    <input class="controls" type="text" name="ciudad" value="<?php echo $ciu ?>" placeholder="actualisar ciudad" required="">
    <input class="controls" type="text" name="direccion" value="<?php echo $dir ?>" placeholder="actualisar direccion" required="">
	<input class="controls" type="text" name="producto" value="<?php echo $pro ?>" placeholder="actualisar producto"required="" >
    <input class="controls" type="text" name="precio" value="<?php echo $pre ?>" placeholder="actualisar precio" required="">
    <input class="controls" type="text" name="traspotadora" value="<?php echo $tra ?>" placeholder="actualisar envio" required="">
	<input class="botons" type="submit" name="update"> </input>
    <a href="index.php" class = "boton2">cancelar</a><br>
	
   </section>
</form>
</body>
</html>



