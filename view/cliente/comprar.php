<?php
session_start();
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funProducto.php");
require_once("../../controladores/funUsuario.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pedido</title>
    <link href="includes/style/style1.css" rel="stylesheet" >
</head>
<body>

<?php
$id=$_GET['id'];
$data=recupProd($id);
$idUsuario= $_SESSION['IdUsuario'];

foreach ($data as $key) {
    ?>
    <div class="container">
	<div class="d-flex justify-content-center h-50">
		<div class="card">
			<div class="card-header  text-white" >
				<h7>REALIZAR PEDIDO</h7>
			</div>

            <div class="card-body">
            <label><?php echo "MODELO: ".$key['Modelo']?></label><br>
            <label><?php echo "DESCRIPCION: ". $key['Descripcion']?></label><br>
            <label><?php echo "PRECIO U: S/.". $key['Precio']?></label>
            <form action="#" method="POST">
            <input type="date" name="fecha"><br>
            <input type="number" name="cantidad" placeholder="Cantidad"><br> 
            <input type="number" name="total" placeholder="Total"><br>   
            <input type="hidden" name="idProducto" value="<?php echo $key['IdProducto'] ?>" name="idProducto">
            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario ?>">
            <input type="submit" name="guardar">
            </form>
            </div>
		</div>
	</div>
</div>

<?php
}
 if(isset($_POST['guardar'])){
    $cantidad=$_POST['cantidad'];
    $fecha=$_POST['fecha'];
    $total=$_POST['total'];
    $idprod=$_POST['idProducto'];
    $iduser=$_POST['idUsuario'];

    comprar($fecha,$cantidad,$total,$iduser,$idprod);

    }
    ?>

</body>
</html>
