<?php
    include "./conexion.php";
    include "./carrito.php";
    include "./cabecera.php";
?>   
<?php
    if (!empty($_SESSION['carrito'])) {?>                       
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th class="text-center" width="40%">DESCRIPCIÓN</th>
                <th class="text-center" width="15%">CANTIDAD</th>
                <th class="text-center" width="20%">PRECIO</th>
                <th class="text-center" width="20%">TOTAL</th>
                <th class="text-center" width="5%">---</th>
            </tr>

        <?php 
            $total=0;
            foreach($_SESSION['carrito'] as $indice=>$producto){ ?>
            
                <tr>
                    <td class="text-center" width="40%"><?php echo $producto['NOMBRE']?></td>
                    <td class="text-center" width="15%"><?php echo $producto['CANTIDAD']?></td>
                    <td class="text-center" width="20%"><?php echo $producto['PRECIO']?></td>
                    <td class="text-center" width="20%"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'],2)?></td>
                    <td class="text-center" width="5%"><button class = "btn btn-danger">Eliminar</button></td>
                </tr>
            

                <?php } 
                    $total=$total+($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                    <tr>
                        <td colspan="3" align="right"><h3>Total a pagar</h3></td>
                        <td align="right"> <h3><?php echo number_format($total,2); ?> </h3> </td>
                        <td></td>
                    </tr>
            </tbody>
<?php } else {?>
    <div class="alert alert-danger" role="alert">
        no hay nada en el carrito mi compa 🤙🏻
    </div>
    
<?php } ?>

</body>
</html>