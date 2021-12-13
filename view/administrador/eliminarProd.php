<?php

include("../../controladores/funProducto.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];

    eliminar($id);
    header("location:listarProd");
    
}else{
    echo "no existe Id";
}
?>

?>