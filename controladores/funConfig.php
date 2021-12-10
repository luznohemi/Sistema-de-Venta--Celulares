<?php
function verConfig(){
    global $pdo;
    $config=[];
    $sql= "SELECT * FROM Configuracion";
    $resultado=$pdo->query($sql);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    while ($row=$resultado->fetch()) {
        array_push($config,$row);
    }
    return($config);

}

function EditarConfig($id,$nombre,$celular,$email,$direccion){
    global $pdo;
    try {
    $sql="UPDATE configuarcion SET DescripcionEmpresa=?,Celular=?,Gmail=?,Direccion=? WHERE IdConfig=?" ;
    $editar=$pdo->prepare($sql);
    $editar->execute([$nombre,$celular,$email,$direccion ,$id]);

    } catch (Exception $ex) {
         die("Error al actualizar").$ex->getMessage();
    }

}

?>