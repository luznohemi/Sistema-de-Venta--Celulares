
<?php
//include_once("../../include/header.php");
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funConfig.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>configuracion</title>
   

	<!--Custom styles
	<link href="../../include/style/style.css" rel="stylesheet" >-->
</head>
<body>

<?php
	$datos=verConfig();
	//vardump($datos);

	foreach ($datos as $data) {
		$id=$data['IdConfig'];
		$Descripcion=$data['DescripcionEmpresa'];
        $Celular=$data['Celular'];
		$Gmail=$data['Gmail'];
		$Direccion=$data['Direccion'];
		?>	

<!----  formulario de editar !-->
<div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>Datos de la Empresa </h7>
			</div>
	
			<div class="card-body">
				<form action="configuracion.php" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo $id?>">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Nombres</label>
						<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $Descripcion?>">
						
					</div>


                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Celular</label>
						<input type="number" name="celular" id="celular" class="form-control" placeholder="Celular"  value="<?php echo $Celular?>">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <label for="">Correo</label>
						<input type="email" name="correo"  id="correo"class="form-control" value="<?php echo $Gmail?>">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <label for="">Direccion</label>
						<input type="text" name="direccion" id="direccion" class="form-control"  value="<?php echo $Direccion?>">
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
	$id=$_POST['id'];
	$nombres=$_POST['nombres'];
    $celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	EditarConfig($id,$nombres,$celular,$correo,$direccion);

}

?>		
		<?php
	}
?>



</body>
</html>