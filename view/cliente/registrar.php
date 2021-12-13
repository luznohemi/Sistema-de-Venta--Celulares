
<?php
session_start();
include_once("../../include/header.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
   

	<!--Custom styles-->
	<link href="../../include/style/styleR.css" rel="stylesheet" >
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h5>REGISTRO DE CLIENTE</h5>
			</div>
			<div class="card-body">
				<form action="registrar.php" method="POST">

					<div class="input-group form-group">
						
						<input type="text" name="dni" class="form-control" placeholder="DNI">
						
					</div>

					<div class="input-group form-group">
						
						<input type="text" name="nombres" class="form-control" placeholder="Nombres">
						
					</div>

					<div class="input-group form-group">
						
						<input type="email" name="correo" class="form-control" placeholder="Correo">
						
					</div>

					<div class="input-group form-group">
						
						<input type="number" name="celular"  class="form-control" placeholder="Celular">
					</div>

					<div class="input-group form-group">
						
						<input type="password" name="pw"class="form-control" placeholder="Contraseña">
					</div>

					<div class="input-group form-group">
						
						<input type="text" name="direccion" class="form-control" placeholder="Direccion">
					</div>
					
					<div class="form-group">
						<input type="submit" name="registrar" value="Registrar" class="btn float-right login_btn">
					</div>
			    </div>

			    <div class="card-footer">
				<div class="d-flex justify-content-center ">
					<a class="text-white" href="login.php">INICIAR SESION</a>
				</div>
			</div>
		</div>
	</div>

	</form>
</div>
<?php
if(isset($_POST['registrar'])){
	$dni=$_POST['dni'];
	$nombres=$_POST['nombres'];
	$correo=$_POST['correo'];
	$celular=$_POST['celular'];
	$pw=$_POST['pw'];
	$tipoUsuario="cliente";
	$direccion=$_POST['direccion'];
	addUser($dni,$nombres,$correo,$celular,$pw,$tipoUsuario,$direccion);

}

?>
</body>
</html>