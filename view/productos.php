<?php
session_start();
include '../controller/controladorProductos.php';
include '../view/cabecera.php';
$ctrProductos = new CtrProductos();
?>



    <main>

        <div class="container-fluid row">
            <!--<h1 class="text-center">CRUD PRODUCTOS</h1>-->

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
                    <div class="mb-3">
                            <label for="" class="form-label">Descripcion</label>
                            <textarea class="form-control" name="descripcion" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary text-white  mt-4 " type="submit" name="btnAgregar" value="ok">Agregar</button>



                </form>

            </div>



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
                                $ctrProductos->mostrarProductos();
                                $ctrProductos->agregarProducto();
                                $ctrProductos->eliminarProducto();
                                $ctrProductos->modificarProducto();

                                

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