<?php
include "./php/conexion.php";

$cn = Conexion::conectar();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Carrito</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo de la empresa</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Carrito
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="contairner-fluid p-2">
        <br>
        <div class="alert alert-success">
            Pantalla de mensaje
            <?php print_r($_POST); ?>
            <a href="#" class="badge text-bg-success">Ver carrito</a>
        </div>

        <div class="row p-2 ">

            <?php
            $sentencia = $cn->prepare("SELECT * FROM `tblproductos`");
            $sentencia->execute();
            $lista = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <?php foreach ($lista as $producto) { ?>
                <div class="col-3 p-2">
                    <div class="card">
                        <img class="card-img-top" src=" <?php echo $producto['Imagen']; ?>" alt="<?php echo $producto['Nombre']; ?>" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content=" <?php echo $producto['Descripcion']; ?> " />
                        <div class="card-body">
                            <span><?php echo $producto['Nombre']; ?></span>
                            <h4 class="card-title">Gs.<?php echo $producto['Precio']; ?></h4>
                            <p class="card-text">Descripcion</p>
                            <form action="" method="post">

                                <input type="hidden" name="id" id="id" value=" <?php echo $producto['Id']; ?> ">
                                <input type="hidden" name="nombre" id="nombre" value=" <?php echo $producto['Nombre']; ?> ">
                                <input type="hidden" name="precio" id="precio" value=" <?php echo $producto['Precio']; ?> ">
                                <input type="hidden" name="cantida" id="cantidad" value=" <?php echo 1; ?> ">

                                <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
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