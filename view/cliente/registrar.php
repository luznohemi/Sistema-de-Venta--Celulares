
<?php
include_once("../../include/header.php");
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
				<form>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="DNI">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombres">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Correo">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="number" class="form-control" placeholder="Celular">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="contraseña">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="direccion">
					</div>
					
					<div class="form-group">
						<input type="submit" value="iniciar" class="btn float-right login_btn">
					</div>
				</form>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿si no tienes cuenta ?
				</div>
				<div class="d-flex justify-content-center ">
					<a class="text-white" href="#">INICIAR SESION</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>