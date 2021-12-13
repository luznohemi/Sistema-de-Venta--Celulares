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
            $_SESSION['IdUsuario']=$id;
            header("location:../administrador");  
        }
        if($tipo==="cliente"){
            $_SESSION['IdUsuario']=$id;
            header("location:index.php");
        }
           
    }else{
        echo "EL USUARIO NO EXISTE";
    }    
}

function cerrarSession(){
    session_unset();
    session_destroy();
    header("location:../../");
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


function verUsuario(){
    global $pdo;
    $usuario=[];
    $sql= "SELECT*FROM usuario";   
    $resultado=$pdo->query($sql);
    $resultado->setFetchMode(PDO::FETCH_ASSOC);

        while ($row=$resultado->fetch()) {
            $tipo= $row['TipoUsuario'];
            if ($tipo=="cliente") {
                array_push($usuario,$row);
            }
        }
        return $usuario;
}

function comprar($fecha,$cantidad,$total,$iduser,$idprod){
    global $pdo;
    $estado="Pendiente";
       try {
           $agregar=$pdo->prepare("INSERT INTO venta(fecha,Cantidad,Total,Estado,iduser,idprod) VALUES(?,?,?,?,?,?)");
           $agregar->execute([$fecha,$cantidad,$total,$estado,$iduser,$idprod]);  
           echo "Se registro su pedido";
           ?>
            <a href="../cliente/">Regresar</a>
           <?php
           ?>
            <script>
                window.open('https://wa.link/cm6onl','_blank');                                                                                                                            
                
            </script>
           <?php
       } catch (Exception $ex) {
           die("Error").$ex->getMessage();
       }
}

?>