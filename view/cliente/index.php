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
                        <img src="" alt="" witch="100px" height="100px">
                        <h4><?php echo $key['Modelo'];?></h4>
                        <span><?php echo $key['Marca'];?></span><br>
                        <span><?php echo "S/.".$key['Precio'];?></span> <br>
                        <span><?php echo "Stock: ".$key['Cantidad'];?></span><br>
                        <a href=""><Button>Comprar</Button></a>
                    </div>
                  
                <?php
            }
        ?>
    </div>
</body>