<?php
 session_start();
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
  <BR>
    <P>LISTA DE VENTAS</P>
<table class="table table-bordered order-table ">
  <thead>
  <tr >
      <th>ID</th>
      <th>Cliente</th>
      <th>FECHA</th>
      <th>CANTIDAD</th>
      <th>TOTAL</th>
      <th>ESTADO</th>
      <th>Acciones</th>
     
    
    </tr>
  </thead>

  <?php  
  $usuario=verVenta();
   ?>
  <?php foreach ($usuario as $usuarios){ ?>
    <tr class="table-info">
        <td><?= $usuarios['IdVenta']; ?></td>
        <td><a href="listaCliente"><?= $usuarios['iduser']; ?></a></td>
        <td><?= $usuarios['fecha']; ?></td>
        <td><?= $usuarios['Cantidad']; ?></td>
        <td><?= $usuarios['Total']; ?></td>
        <td><?= $usuarios['Estado']; ?></td>
   
       
        <td><a href="">Eliminar</a> / 
        <form action="#" method="GET">
            <input type="hidden" name="id" value="<?php echo $usuarios['IdVenta']?>">
            <input type="submit" value="Editar" name="abrir">
        </form>
        <?php if(isset($_GET['id'])){
            ?>
              <form action="actualizarEstado.php" method="post">
                <input type="radio" name="activo" value="Venta Cerrada" >
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                <img src="../../include/iconos/activo.png" width="30px" HEIGHT="25px">
                <input type="submit" value="Actualizar" name="Actualizar">
              </form>
              <?php
          }
        ?>
      </td>
      </tr>
  <?php } ?>

  

</table>
</body>
</html>
aqui esta toda las ventas