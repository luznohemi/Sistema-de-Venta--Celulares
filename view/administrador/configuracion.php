
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
   
	<link href="includes/style/style1.css" rel="stylesheet" >
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
				<h7>DATOS DE LA EMPRESA</h7>
			</div>
	
			<div class="card-body">
				<form action="configuracion.php" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo $id?>">

                        <label for="">Nombres</label>
						<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $Descripcion?>">
						
						
                        <label for="">Celular</label>
						<input type="number" name="celular" id="celular" class="form-control" placeholder="Celular"  value="<?php echo $Celular?>">
						
                        <label for="">Correo</label>
						<input type="email" name="correo"  id="correo"class="form-control" value="<?php echo $Gmail?>">
						
				
                        <label for="">Direccion</label>
						<input type="text" name="direccion" id="direccion" class="form-control"  value="<?php echo $Direccion?>">
					
					
					<div class="form-group">
						<input type="submit" name="modificar" value="Modificar " class="btn float-right login_btn">
					</div>
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