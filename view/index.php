<?php
include "../php/conexion.php";
include "../php/carrito.php";
include '../view/cabecera.php'; 

$cn = Conexion::conectar();
?>
<div class="contairner-fluid p-2">
    <?php if (!empty($mensaje)) { ?> 
        <div class="alert alert-success">
            <?php 
                echo $mensaje;
            ?>
            <a href="../view /info_carrito.php" class="badge text-bg-success">Ver carrito</a>
        </div>
        <?php } ?>
        
        <div class="row p-2"> 
            <?php
            $sentencia = $cn->prepare("SELECT * FROM `tblproductos`");
            $sentencia->execute();
            $lista = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <?php foreach ($lista as $producto) { ?>
                <div class="col-sm-3  mt-2">
                    <div class="card">
                        <img class="card-img-top" 
                            src=" <?php echo $producto['Imagen']; ?>" 
                            alt="<?php echo $producto['Nombre']; ?>" 
                            data-bs-toggle="popover" 
                            data-bs-trigger="hover" 
                            data-bs-content=" <?php echo $producto['Descripcion']; ?> " 
                            height = "317px"
                        />
                        <div class="card-body" style="width: 18rem;" >
                            <span><?php echo $producto['Nombre']; ?></span>
                            <h4 class="card-title">Gs.<?php echo $producto['Precio']; ?></h4>
                            <p class="card-text">Descripcion</p>
                            <form action="" method="post">

                                <input type="hidden" name="id" id="id" value=" <?php echo $producto['Id']; ?> ">
                                <input type="hidden" name="nombre" id="nombre" value=" <?php echo $producto['Nombre']; ?> ">
                                <input type="hidden" name="precio" id="precio" value=" <?php echo $producto['Precio']; ?> ">
                                <input type="hidden" name="cantidad" id="cantidad" value=" <?php echo 1; ?> ">
                                
                                <button class="btn btn-secondary" name="btnAccion" value="Agregar" type="submit">
                                    Agregar al carrito
                                </button>
                                
                            </form>

                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
</body>

</html>
