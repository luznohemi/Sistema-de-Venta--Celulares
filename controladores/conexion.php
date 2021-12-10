<?php
try {
    $pdo=new PDO ("mysql:host=localhost;dbname=dbproyecto", "root","");
    
} catch (exception $ex) {
    die("ERROR").$ex->getMessage();
}


?>