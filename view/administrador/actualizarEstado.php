<?php
session_start();
include("../../controladores/funAdmin.php");
    if (isset($_POST['Actualizar'])) {
        $estado=$_POST['activo'];
        $id=$_POST['id'];
        estado($id,$estado);
    }
?>