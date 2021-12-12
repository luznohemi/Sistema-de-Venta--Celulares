
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de productos</title>
    <link href="includes/style/styleCat.css" rel="stylesheet" >
</head>
<?php
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funProducto.php");

$data=verProd();
?>
<body>
<div class="contenedor">
        <?php
            foreach ($data as $key) {
                ?>
                    <div class="contenido"   >
                        <img src="../../include/img/<?= $key['img']?>" WIDTH="100" HEIGHT="100"></td>
                        <h4><?php echo $key['Modelo'];?></h4>
                        <span><?php echo $key['Marca'];?></span><br>
                        <span><?php echo "S/.".$key['Precio'];?></span> <br>
                        <span><?php echo "Stock: ".$key['Cantidad'];?></span><br>
                        <a href="comprar.php?id=<?php echo $key['IdProducto']?> &Marca=<?php echo $key['Marca']?>"><Button>Comprar</Button></a>
                    </div>
                  
                <?php
            }
        ?>
    </div>
</body>

