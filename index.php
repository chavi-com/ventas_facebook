<?php include("db.php") ?>
<?php include("cliente.php") ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="widh=device-widt, inditial scale=1.0">
		<link rel="stylesheet" type="text/css" href="stilecrud.css">
	<title>VENTAS </title>
	<script src='archi.js'></script>
</head>

<body>
<div class="todo">    
    <h1>FACTURACION </h1>

    <a class ="primary" href="inicio.php">INICIO</a>
    
    <h2 class="search2">BUSCAR:</h2><input class ="buscar" type="search" name="buscar" id="">
    <input class="botons" type="submit" name ="buscar">
   
 <form action="registrar.php" method="POST"  class ="formulario">

   <section class="form-register" >
	<h4>FACTURAS</h4>
	<input class="controls" type="text" name="nombre" placeholder="nombre del cliente "required="" >
	<input class="controls" type="text" name="apellido" placeholder="apellido del cliente" required="">
    <input class="controls" type="text" name="telefono" placeholder="numero  de telefono "required="" >
    <input class="controls" type="text" name="ciudad" placeholder="ciudad "required="" >
	<input class="controls" type="text" name="direccion" placeholder="direccion" required="">
    <input class="controls" type="text" name="producto" placeholder="producto"required="" >
    <input class="controls" type="text" name="precio" placeholder="precio "required="" >
    <input class="controls" type="text" name="traspotadora" placeholder="medio de envio "required="" ><br>
	<input class="botons" type="submit" name ="save_task">
    <a href="index.php" class = "boton2">cancelar</a><br>
	
   </section>
   <table class=table>
     <thead>
         <tr>
             <th class=titles>NOMBRES   </th>
             <th class=titles>APELLIDOS   </th>
             <th class=titles>TELEFONO   </th>
             <th class=titles>CIUDAD   </th>
             <th class=titles>DIRECCION   </th>
             <th class=titles>PRODUCTO   </th>
             <th class=titles>PRECIO   </th>
             <th class=titles>ENVIO  </th>
             <th class=titles>FECHA DE REGISTRO       </th>
             <th class=titles>OPCIONES   </th>
         </tr>
     </thead>
    <tbody> 
        
    <?php
    $query = "SELECT * FROM facturas";
    $resultado_facturas = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($resultado_facturas)) { ?>
        <tr class ="filas">
            <td class = "letras"><?php echo $row['nombre'] ?></td>
            <td class = "letras"><?php echo $row['apellido'] ?></td>
            <td class = "letras"><?php echo $row['telefono'] ?></td>
            <td class = "letras"><?php echo $row['ciudad'] ?></td>
            <td class = "letras"><?php echo $row['direccion'] ?></td>
            <td class = "letras"><?php echo $row['producto'] ?></td>
            <td class = "letras"><?php echo $row['precio'] ?></td>
            <td class = "letras"><?php echo $row['traspotadora'] ?></td>
            <td class = "letras"><?php echo $row['fecha'] ?></td>

            <td class ="letras">
                <a class="edit" href="editar.php?id=<?php echo $row['id'] ?>">
                Editar
            </a>
                <a class="eliminar" href="borrar.php?id=<?php echo $row['id'] ?>">
                Eliminar
            </a>
            </td>
        </tr>

    <?php } ?>

    </tbody>
</table>
 </form>
 
</div>    
</body>
</html>