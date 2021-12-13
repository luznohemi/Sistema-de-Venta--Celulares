
<?php
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funProducto.php");
include("../../controladores/funUsuario.php");

$id=$_GET['id'];
$data=recupProd($id);
$idUsuario= $_SESSION['IdUsuario'];

foreach ($data as $key) {
    ?>
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
