<?php
include_once("conexion.php");

   //registrar usuario
   $pdo;

   function addUser($dni,$nombres,$correo,$celular,$pw,$tipoUsuario,$direccion){
       global $pdo;
       try {
           $agregar=$pdo->prepare("INSERT INTO usuario(Dni,Nombres,Correo,Celular,Pw,TipoUsuario,Direccion) VALUES(?,?,?,?,?,?,?)");
           $agregar->execute([$dni,$nombres,$correo,$celular,$pw,$tipoUsuario,$direccion]);  
           echo "REGISTRO EXITOSO";
       } catch (Exception $ex) {
           die("Error").$ex->getMessage();
       }


   }
   //addUser('232','luz','12s@gamil','121322','123','cliente','san sebas');
  



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
        if($tipo=='administrador'){
            $_SESSION['usuario']=$usuario;
            header("location:view/administrador");  
        }
        if($tipo==="cliente"){
            $_SESSION['usuario']=$usuario;
            header("location:index.php");
        }
           
    }else{
        echo "EL USUARIO NO EXISTE";
    }    
}



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
?>