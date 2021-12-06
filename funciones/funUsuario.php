<?php
include_once("conexion.php");
//NUEV USUARIO 
function nuevoUsuario(){

    

}
//obtener id de usuario logeando
function obtenerID(){
    global $pdo;
    $nuevoUsurio=$_SESSION['usuario'];
    $query="SELECT * FROM user WHERE  Gmail=?";
    $resultado=$pdo->prepare($query);
    $resultado->execute([$nuevoUsurio]);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    while ($row=$resultado->fetch()) {
        return $row['idUsuario'];
    }
}

function login($user,$pw){
    global $pdo;
    $query="SELECT*FROM usuario WHERE Correo=? AND Pw=?";
    $resultado=$pdo->prepare($query);
    $resultado->execute([$user,$pw]);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);

    while ($row=$resultado->fetch()) {
        $usuario=$row['Correo'];
        $contra=$row['Pw'];
        $id=$row['IdUsuario'];
        $tipo=$row['TipoUsuario'];
    }


    if(isset($usuario)&&($contra)){
        if($tipo=='admin'){
            $_SESSION['usuario']=$usuario;
            header("location:../view/administrador");  
        }
        if($tipo==="cliente"){
            echo "cliente";
        }
           
    }else{
        echo "EL USUARIO NO EXISTE";
    }    
}


?>