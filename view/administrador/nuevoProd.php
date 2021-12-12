
<?php

include("includes/navbar.php");
include("includes/header.php");

include("../../controladores/funProducto.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>nuevo cliente </title>
   

	<!--Custom styles
	<link href="../../include/style/style.css" rel="stylesheet" >-->
</head>
<body>

<form action="nuevoProd.php" method="post" enctype="multipart/form-data">
	<div>
		<input type="text" name="modelo" placeholder="Modelo">
	</div>
	<div>
		<textarea name="descripcion" cols="23" rows="3" placeholder="Descripcion"></textarea>
	</div>
	<div>
		<input type="text" name="marca" placeholder="Marca">
	</div>
	<div>
		<input type="number" name="precio" placeholder="Precio">
	</div>
	<div>
		<input type="number" name="cantidad" placeholder="Cantidad">
	</div>
	<div>
		<input type="file" name="img" accept="image/*">
	</div>
	<div>
		<input type="submit" name="nuevo" value="Agregar">
	</div>
</form>
<?php
if(isset($_POST['nuevo'])){
	$modelo=$_POST['modelo'];
    $descripcion=$_POST['descripcion'];
	$marca=$_POST['marca'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['cantidad'];

	$img=$_FILES['img']['name'];
    $imgT=$_FILES['img']['tmp_name'];
	nuevoProd($modelo,$descripcion,$marca,$precio,$cantidad,$img,$imgT);

}

?>
</body>
</html>