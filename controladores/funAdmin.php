<?php

include_once("conexion.php");

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
?>