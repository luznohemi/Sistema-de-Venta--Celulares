<?php
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funProducto.php");


    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        //ECHO $id;

      // eliminar($id);
      // header("location:listarProd");
        
    }else{
        echo "no existe Id";
    }
?>