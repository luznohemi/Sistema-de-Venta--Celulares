
<?php
include_once("../../include/header.php");
include("../../funciones/funUsuario.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
   

	<!--Custom styles-->
	<link href="../../include/style/style.css" rel="stylesheet" >
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>REGISTRO DE CLIENTE</h7>
			</div>
			<div class="card-body">
				<form action="registrar.php" method="POST">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="dni" class="form-control" placeholder="DNI">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="nombres" class="form-control" placeholder="Nombres">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="correo" class="form-control" placeholder="Correo">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="number" name="celular"  class="form-control" placeholder="Celular">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pw"class="form-control" placeholder="Contraseña">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" name="direccion" class="form-control" placeholder="Direccion">
					</div>
					
					<div class="form-group">
						<input type="submit" name="registrar" value="iniciar" class="btn float-right login_btn">
					</div>
			    </div>

			    <div class="card-footer">
				 <div class="d-flex justify-content-center links">
					¿si no tienes cuenta ?
				</div>
				<div class="d-flex justify-content-center ">
					<a class="text-white" href="index.php">INICIAR SESION</a>
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