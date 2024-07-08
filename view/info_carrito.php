<?php
    include "../php/carrito.php";
    include "../view/cabecera.php";
?>   
<?php
    $total=0;
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
            
            foreach($_SESSION['carrito'] as $indice=>$PRODUCTO){ ?>
            
                <tr>
                    <td class="text-center p-3" width="40%"><?php echo $PRODUCTO['NOMBRE']?></td>
                    <td class="text-center p-3" width="15%"><?php echo $PRODUCTO['CANTIDAD']?></td>
                    <td class="text-center p-3" width="20%"><?php echo $PRODUCTO['PRECIO']?></td>
                    <td class="text-center p-3" width="20%"><?php echo number_format($PRODUCTO['PRECIO'] * $PRODUCTO['CANTIDAD'],2)?></td>
                    <td class="text-center" width="5%">
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value=" <?php echo $PRODUCTO['ID']; ?> ">
                            <button class = "btn btn-danger" 
                                type= "submit"
                                value = "Eliminar"
                                name = "btnAccion"
                                ><img src="../svg/trash-fill.svg" alt="">
                            </button>
                        </form>                       
                    </td>
                </tr>
            

                <?php 
                $total=$total+($PRODUCTO['PRECIO'] * $PRODUCTO['CANTIDAD']); 
                }?>
                <tr>
                    <td colspan="3" align="right"><h3>Total a pagar</h3></td>
                    <td align="right"> <h3><?php echo number_format($total,2); ?> </h3> </td>
                    <td><a href="../Factura/factura.php" target="_blank" class="btn btn-primary"> Pagar</a></td>
                </tr>
            </tbody>
<?php } else {?>
    <div class="alert alert-danger" role="alert">
        no hay nada en el carrito mi compa 🤙🏻
    </div>
    
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>