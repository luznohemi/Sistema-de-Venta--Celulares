<?php
include_once("conexion.php");

   //registrar usuario
   $pdo;

   function addUser($dni,$nombres,$correo,$celular,$pw,$direccion){
       global $pdo;
       try {
           $agregar=$pdo->prepare("INSERT INTO usuario(Dni,Nombres,Correo,Celular,Pw,Direccion) VALUES(?,?,?,?,?,?)");
           $agregar->execute([$dni,$nombres,$correo,$celular,$pw,$direccion]);  
           echo "REGISTRO EXITOSO";
       } catch (Exception $ex) {
           die("Error").$ex->getMessage();
       }


   }
   addUser('232','luz','12s@gamil','121322','123','san sebas');
  
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