
<?php

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
    <P>LISTA DE PRODUCTOS </P>

<table class="table table-bordered order-table ">
  <thead>
    <tr>
      <th>ID</th>
      <th>MODELOS</th>
      <th>DESCRIPCION</th>
      <th>MARCA</th>
      <th>PRECIO</th>
      <th>CANTIDAD</th>
      <th>IMAGEN</th>
    </tr>
  </thead>

  <?php  
  $productos=verProd();
   ?>
  <?php foreach ($productos as $producto){ ?>
      <tr>
        <td><?= $producto['IdProducto']; ?></td>
        <td><?= $producto['Modelo']; ?></td>
        <td><?= $producto['Marca']; ?></td>
        <td><?= $producto['Precio']; ?></td>
        <td><?= $producto['Cantidad']; ?></td>
        <td><?= $producto['img']; ?></td>
      </tr>
  <?php } ?>
  

</table>
</body>
</html>