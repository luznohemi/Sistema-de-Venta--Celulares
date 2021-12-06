<?php
include_once("conexion.php");

   //registrar usuario
   $pdo;

   function addUser($dni,$nombres,$correo,$celular,$pw,$tipoUsuario,$direccion){
       global $pdo;
       try {
           $agreagar=$pdo->prepare("INSERT INTO user(Dni,Nombres,Correo,Celular,Pw,TipoUsuario,Direccion) VALUES(?,?,?,?,?,?,?)");
           $agreagar->execute([$dni,$nombres,$correo,$celular,$pw,$tipoUsuario,$direccion]);  
           echo "REGISTRO EXITOSO";
       } catch (Exception $ex) {
           die("Error").$ex->getMessage();
       }
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


?>