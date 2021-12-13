<?php
require_once("../../controladores/funUsuario.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de ventas</title>
    <link href="includes/style/styleT.css" rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #99FFFF">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">MÓVILES</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="user">
    <img src="../../include/iconos/usuario.png" witch="40px" height="40px"><br>
    <label>Cliente</label>
    <form action="#" method="post">
      <input type="submit" value="Cerrar Session" name="salir">
    </form>
    <?php
      if (isset($_POST['salir'])) {
        cerrarSession();
      }
    ?>
  </div>
</nav>
</body>
</html>
