<?php
include_once("conexion.php");
//ver configuracion

function verConfig(){
    global $pdo;
    $config=[];
    $sql= "SELECT*FROM configuracion";   
    $resultado=$pdo->query($sql);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);

        while ($row=$resultado->fetch()) {
            array_push($config,$row);
            return $config;
        }
   
}

//$data=verConfig();
//var_dump($data);
 
//editar configuaracion 
function EditarConfig($id,$nombre,$celular,$email,$direccion){
    global $pdo;
    try {
    $sql="UPDATE configuracion SET DescripcionEmpresa=?,Celular=?,Gmail=?,Direccion=? WHERE IdConfig=?" ;
    $editar=$pdo->prepare($sql);
    $editar->execute([$nombre,$celular,$email,$direccion,$id]);

    } catch (Exception $ex) {
         die("Error al actualizar").$ex->getMessage();
    }
    
}

//EditarConfig('1','MUNDO DE RES','984345676','celulares@gmail.com','Av. La cultura');

?>