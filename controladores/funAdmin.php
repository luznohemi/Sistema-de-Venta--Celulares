<?php

include_once("conexion.php");

//funcion ver venta 

function verVenta(){
    global $pdo;
    $venta=[];
    $sql= "SELECT*FROM venta";   
    $resultado=$pdo->query($sql);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);

        while ($row=$resultado->fetch()) {
            array_push($venta,$row);
        }
        return $venta;
}
 //funcion de estado 
function estado($id,$estado){
    global $pdo;
    try {
    $sql="UPDATE venta SET Estado=? WHERE IdVenta=?" ;
    $editar=$pdo->prepare($sql);
    $editar->execute([$estado,$id]);
    header("location:../administrador/listarVenta.php");
        
    } catch (Exception $ex) {
         die("Error al actualizar").$ex->getMessage();
    }
}
?>