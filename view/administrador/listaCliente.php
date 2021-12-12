<?php

include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funUsuario.php");
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
    <P>LISTA DE CLIENTE </P>

    <button ><a href="nuevoProd.php">Nuevo</a> </button>

<table class="table table-bordered order-table ">
  <thead>
    <tr >
      <th>ID</th>
      <th>DNI</th>
      <th>NOMBRES</th>
      <th>CORREO</th>
      <th>CELULAR</th>
      <th>TUsuario</th>
      <th>DIRRECCION</th>
      <th> </th>
    </tr>
  </thead>

  <?php  
  $usuario=verUsuario();
   ?>
  <?php foreach ($usuario as $usuarios){ ?>
    <tr class="table-info">
        <td><?= $usuarios['IdUsuario']; ?></td>
        <td><?= $usuarios['Dni']; ?></td>
        <td><?= $usuarios['Nombres']; ?></td>
        <td><?= $usuarios['Correo']; ?></td>
        <td><?= $usuarios['Celular']; ?></td>
        <td><?= $usuarios['TipoUsuario']; ?></td>
        <td><?= $usuarios['Direccion']; ?></td>
       
        <td><a href="">Eliminar</a> / <a href="">Editar</a> </td>
      </tr>
  <?php } ?>

  

</table>
</body>
</html>