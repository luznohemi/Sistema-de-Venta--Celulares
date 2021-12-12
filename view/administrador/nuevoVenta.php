
<?php
//include_once("../../include/header.php");
include("includes/navbar.php");
include("includes/header.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>configuracion</title>
   

	<!--Custom styles
	<link href="../../include/style/style.css" rel="stylesheet" >-->
</head>
<body>




<!----  formulario de editar !-->
<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>nueva venta </h7>
			</div>
	
			<div class="card-body">
				<form action="configuracion.php" method="POST">
                    <input type="hidden" name="id" id="modificar_id">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Nombres</label>
						<input type="text" name="nombres" id="nombres" class="form-control" value="">
						
					</div>


                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Celular</label>
						<input type="number" name="celular" id="celular" class="form-control" placeholder="Celular">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Correo</label>
						<input type="email" name="correo"  id="correo"class="form-control" placeholder="Correo">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <label for="">Direccion</label>
						<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion">
					</div>
					
					<div class="form-group">
						<input type="submit" name="modificar" value="Modificar Datos" class="btn float-right login_btn">
					</div>
			    </div>

			
				<div class="d-flex justify-content-center ">
					<a class="text-white" href="index.php">ir a inicio</a>
				</div>
			</div>
		</div>
	</div>

	</form>
</div>
<?php
if(isset($_POST['modificar'])){
	$nombres=$_POST['nombres'];
    $celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	modificarDatosE($nombres,$celular,$correo,$direccion);

}

?>
</body>
</html>