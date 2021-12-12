<?php
include("includes/header.php");
include("../../controladores/funProducto.php");
$id=$_GET['id'];
$data=recupProd($id);


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
        <input type="hidden" value="<?php echo $_SESSION['IdUsuario']; ?>">
    </form>
    <?php
}
?>
