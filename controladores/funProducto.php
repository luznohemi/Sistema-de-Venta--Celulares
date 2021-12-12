<?php


include_once("conexion.php");

//VER PRODUCTO y mostrar catalogo

$pdo;
function verProd(){
    global $pdo;
    $producto=[];
    $sql= "SELECT*FROM producto";   
    $resultado=$pdo->query($sql);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);

        while ($row=$resultado->fetch()) {
            array_push($producto,$row);
        }
        return $producto;
}

//$data=verProd();
//print_r($data);
   //registrar usuario
function nuevoProd($modelo,$descripcion,$marca,$precio,$cantidad,$img,$imgT){
    global $pdo;
    $sql="INSERT INTO producto(Modelo,Descripcion,Marca,Precio,Cantidad,img) VALUES(?,?,?,?,?,?)";
    $agregar=$pdo->prepare("$sql");
    $agregar->execute([$modelo,$descripcion,$marca,$precio,$cantidad,$img]);  
     
    $ruta="../../include/img/";
    $subido=$ruta.basename($img);

    if(move_uploaded_file($imgT,$subido)){
        echo "Se registro su imagen";
    }else{
        echo "Oh! no";
    }
        
}
 // nuevoProd('j2 prime','samsung j2','samsung','1200','4','cliente');

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


?>



