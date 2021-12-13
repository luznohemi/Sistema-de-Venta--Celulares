
<?php
session_start();
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funProducto.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
</head>
<body>
<BR>
    <p>LISTA DE PRODUCTOS </p>

  <a  class="btn btn-primary"  role="button" href="nuevoProd.php"  ><img src="http://localhost/Sistema-de-Venta--Celulares/include/iconos/nuevo-documento.png" height ="30" width="30"  />Nuevo</a>
    
  <br><br>
<div class="contenedor">
<table class="table table-bordered order-table ">
  <thead >
    <tr lass="table-info">
      <th>ID</th>
      <th>MODELOS</th>
      <th>MARCA</th>
      <th>PRECIO</th>
      <th>CANTIDAD</th>
      <th>IMAGEN</th>
      <th>ACCION</th>
    </tr>
  </thead>

  <?php  
  $productos=verProd();

   ?>
  <?php foreach ($productos as $producto){ ?>

      <tr class="table-info" >
        <td><?= $producto['IdProducto']; ?></td>
        <td><?= $producto['Modelo']; ?></td>
        <td><?= $producto['Marca']; ?></td>
        <td><?= $producto['Precio']; ?></td>
        <td><?= $producto['Cantidad']; ?></td>
        <td><img src="../../include/img/<?= $producto['img']?>" WIDTH="100" HEIGHT="100"></td>
        <td><a href="eliminarProd.php?id=<?php echo $producto['IdProducto']?>">Eliminar</a></td>
      </tr>
      
<?php } ?>
</table>
</div>
</body>
</html>