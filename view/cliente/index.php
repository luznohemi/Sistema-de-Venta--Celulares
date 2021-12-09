
<?php
include_once("../../include/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	
    <link href="../../include/style/style.css" rel="stylesheet" >

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>BIENVENIDO A NUESTRO SISTEMA </h7>
			</div>
			<div class="card-body">
				
			<form action="#" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="nombre de usuario" name="usuario">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="contraseña" name="pw">
					</div>
					
					<div class="form-group">
						<input type="submit" value="iniciar" class="btn float-right login_btn" name="enviar">
					</div>
				</form>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿si no tienes cuenta ?
				</div>
				<div class="d-flex justify-content-center ">
					<a class="text-white" href="view/cliente/registrar.php">REGISTRATE</a>
				</div>
			</div>

			<?php
				if(isset($_REQUEST['enviar'])){
					$user=$_REQUEST['usuario'];
					$pw=$_REQUEST['pw'];

					login($user,$pw);
				}
			?>
		</div>
	</div>
</div>
</body>
</html>