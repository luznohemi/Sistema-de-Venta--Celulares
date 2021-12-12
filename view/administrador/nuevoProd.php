
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
<!---- nuevo producto !-->
<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>NUEVO PRODUCTO  </h7>
			</div>
	
			<div class="card-body">
				<form action="nuevoProd.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Modelo</label>
						<input type="text" name="modelo" id="modelo" class="form-control" >
						
					</div>


                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Descripcion</label>
						<input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Marca</label>
						<input type="text" name="marca"  id="marca"class="form-control" placeholder="marca">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <label for="">Precio</label>
						<input type="number" name="precio" id="precio" class="form-control" placeholder="precio">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <label for="">cantidad</label>
						<input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="cantidad">
					</div>

					
	                <input type="file" name="img" >
                    
					
					<div class="form-group">
						<input type="submit" name="nuevo" value="Nuevo" class="btn float-right login_btn">
					</div>
			    </div>

			
				<div class="d-flex justify-content-center ">
					<a class="text-white" href="index.php">atras</a>
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