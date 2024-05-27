<?php

include '../controller/controladorProductos.php';
$ctrProductos = new Productos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>PRODUCTOS</title>
</head>

<body>

    <main>

        <div class="container-fluid row">
            <h1 class="text-center">CRUD PRODUCTOS</h1>

            <div class="col-md-4 p-5  ">

                <form class="border border-secondary p-5 rounded-5" method="post">
                    <h3 class="text-center text-secondary mb-4">Formulario Usuarios</h3>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label ">Imagen</label>
                        <input type="text" class="form-control" name="imagen" required>
                    </div>

                    <button class="btn btn-primary text-white  mt-4 " type="submit" name="btnAgregar" value="ok">Agregar</button>

                    <?php
                    $ctrProductos->agregarProducto();
                    ?>

                </form>

            </div>

            <?php

            $ctrProductos->eliminarProducto();

            ?>

            <div class="col-md-8">

                <div class="table-responsive p-5">
                    <h1 class="text-center text-secondary">Tabla</h1>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php


                                $ctrProductos->listarProductos();

                                ?>


                            </tbody>

                        </table>
                    </div>


                </div>

            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    </main>

</body>

</html>