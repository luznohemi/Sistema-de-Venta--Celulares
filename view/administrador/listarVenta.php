<?php

include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuario$usuario</title>
    <link href="includes/style/styleT.css" rel="stylesheet" >
</head>
<body>
    <P>LISTA DE VENTAS</P>

    <button ><a href="nuevoProd.php">Nuevo</a> </button>

<table class="table table-bordered order-table ">
  <thead>
  <tr >
      <th>ID</th>
      <th>FECHA</th>
      <th>CANTIDAD</th>
      <th>TOTAL</th>
      <th>ESTADO</th>
     
    
    </tr>
  </thead>

  <?php  
  $usuario=verVenta();
   ?>
  <?php foreach ($usuario as $usuarios){ ?>
    <tr class="table-info">
        <td><?= $usuarios['IdVenta']; ?></td>
        <td><?= $usuarios['fecha']; ?></td>
        <td><?= $usuarios['Cantida']; ?></td>
        <td><?= $usuarios['Total']; ?></td>
        <td><?= $usuarios['Estado']; ?></td>
   
       
        <td><a href="">Eliminar</a> / <a href="">Editar</a> </td>
      </tr>
  <?php } ?>

  

</table>
</body>
</html>
aqui esta toda las ventas