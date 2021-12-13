
<?php

include("includes/navbar.php");
include("includes/header.php");

include("../../controladores/funProducto.php");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
	<title>nuevo cliente </title> 
	<link href="includes/style/style1.css" rel="stylesheet" >
</head>
<body>

<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>NUEVO PRODUCTO</h7>
			</div>

            <div class="card-body">
                <form action="nuevoProd.php" method="post" enctype="multipart/form-data">
			
		        <input type="text" name="modelo" placeholder="Modelo">
	       
		        <textarea name="descripcion" cols="23" rows="3" placeholder="Descripcion"></textarea>
	      
	    	    <input type="text" name="marca" placeholder="Marca">
        	
                <input type="number" name="precio" placeholder="Precio">
	
	        	<input type="number" name="cantidad" placeholder="Cantidad">
	
		        <input type="file" name="img" accept="image/*">
	         <div class="form-group">
		        <input type="submit" name="nuevo" value="Agregar">
	        </div>
			</div>
		</div>
	</div>
   </form>
</div>
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