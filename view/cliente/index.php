<?php
include("includes/navbar.php");
include("includes/header.php");
include("../../controladores/funProducto.php");

$data=verProd();
?>
<body>
    <div class="container">
        <?php
            foreach ($data as $key) {
                ?>
                    <div class="tarjet">
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