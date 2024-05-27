<?php
include '../php/conexion.php';


class Productos extends Conexion
{

    public static function listarProductos()
    {
        $cn = self::conectar();

        try {

            $sql = "SELECT * FROM tblproductos";

            $ps = $cn->prepare($sql);
            $ps->execute();
            $productos = $ps->fetchAll();

            foreach ($productos as $producto) {

                echo   '<tr class="">
                            <td class="align-content-center">' . $producto['Id'] . '</td>
                            <td class="align-content-center">' . $producto['Nombre'] . '</td>
                            <td class="align-content-center" >GS.' . $producto['Precio'] . '</td>
                            <td class="align-content-center" >' . $producto['Imagen'] . '</td>
                            <td class="align-content-center" >
                                <a href="" class="btn btn-md btn-warning" data-bs-toggle="modal" data-bs-target="#modificarModal' . $producto['Id'] . '" ><img src="../svg/pencil-square.svg" alt=""></a>
                                <a href="" class="btn btn-md btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal' . $producto['Id'] . '" ><img src="../svg/trash-fill.svg" alt=""></a>
                            </td>
                        </tr>

                        <!-- Modal Eliminar -->
                        <div class="modal fade" id="eliminarModal' . $producto['Id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="eliminarModal' . $producto['Id'] . '">Eliminar Producto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>¿Desea eliminar este articulo?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="productos.php?id='.$producto['Id'].'" type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                          </div>
                        </div>

                        <!-- Modal Modificar -->
                        <div class="modal fade" id="modificarModal' . $producto['Id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modificarModal' . $producto['Id'] . '">Modificar Producto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre del Producto</label>
                                    <input type="text" class="form-control" name="nombre" value="'.$producto['Nombre'].'" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="precio" value="'.$producto['Precio'].'" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Imagen</label>
                                    <input type="text" class="form-control" name="imagen" value="'.$producto['Imagen'].'" required>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="productos.php?id='.$producto['Id'].'" type="button" class="btn btn-warning">Modificar</a>
                                </div>
                            </div>
                          </div>
                        </div>
                        ';
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function agregarProducto()
    {
        if (!empty($_POST['btnAgregar'])) {

            if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['imagen'])) {

                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $imagen = $_POST['imagen'];

                $cn = self::conectar();
                try {

                    $sql = 'INSERT INTO tblproductos (Nombre,Precio,Imagen) VALUES(:nombre,:precio,:imagen)';

                    $ps = $cn->prepare($sql);
                    $ps->bindParam(':nombre', $nombre);
                    $ps->bindParam(':precio', $precio);
                    $ps->bindParam(':imagen', $imagen);

                    $ps->execute();

                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit;
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
        }
    }

    public static function eliminarProducto()
    {
        if (!empty($_GET['id'])) {
            
            $cn = self::conectar();
            $id = $_GET['id'];
            try {
                
                $sql = "DELETE FROM `tblproductos` WHERE Id = :Id;";
                $ps = $cn->prepare($sql);
                $ps -> bindParam(':Id',$id);
                $ps->execute();

                header("Location: " . $_SERVER['PHP_SELF']);
                exit;

            } catch (PDOException $e ) {
                //throw $th;
            }
            
        }
    }
}
