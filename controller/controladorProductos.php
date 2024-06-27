<?php

include '../model/productoDAO.php';

class CtrProductos extends Conexion 
{
  
  

  public static function mostrarProductos()
  {

    $productos = ProductosDAO::listarProductos();

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
                              <h1 class="modal-title fs-5">Eliminar Producto</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <p>¿Desea eliminar este articulo?</p>
                              <form action="productos.php" method="post">
                                <input type="hidden" name="id" value="' . $producto['Id'] . '">
                                <button class="btn btn-danger" type="submit" name="eliminar" >Eliminar</button>
                              </form>
                              
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
                            <form action="productos.php" method="post">
                              <div class="modal-body">
                              <div class="mb-3">
                                  <input type="hidden" class="form-control" name="id" value="' . $producto['Id'] . '" required>
                                  <label for="" class="form-label">Nombre del Producto</label>
                                  <input type="text" class="form-control" name="nombre" value="' . $producto['Nombre'] . '" required>
                              </div>
                              <div class="mb-3">
                                  <label for="" class="form-label">Precio</label>
                                  <input type="number" class="form-control " name="precio" value="' . $producto['Precio'] . '" required>
                              </div>
                              <div class="mb-3">
                                  <label for="" class="form-label ">Imagen</label>
                                  <input type="text" class="form-control" name="imagen" value="' . $producto['Imagen'] . '" required>
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="descripcion" rows="5" >' . $producto['Descripcion'] . '</textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-warning" name="btnModificar" value="ok" >Modificar</button>
                            </div>
                            </form>

                          </div>
                        </div>
                      </div>
                      ';
      }
      

  }

  public static function eliminarProducto()
  {
    $dao = new ProductosDAO(); 
    if (isset($_POST['eliminar'])) 
    {
      if (isset($_POST['id'])) {
          $id = $_POST['id'];
          
          $dao -> borrarProducto($id); 
            

      } else {
          echo "No se recibió el ID del producto.";
      }
    } 
  }

  public static function agregarProducto()
  {
    $dao = new ProductosDAO(); 
    if (isset($_POST['btnAgregar'])) 
    {
      if ( !empty($_POST['nombre']) and !empty($_POST['precio']) and!empty($_POST['imagen']) and !empty($_POST['descripcion']) ) {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];
        
          $dao -> insertarProducto($nombre,$precio,$imagen,$descripcion); 
            

      } else {
          echo "No se recibió ningun producto.";
      }
    } 
  }

  public static function modificarProducto()
  {
    $dao = new ProductosDAO(); 
    if (isset($_POST['btnModificar'])){ 
      if (!empty($_POST['nombre']) and !empty($_POST['precio']) and!empty($_POST['imagen']) and !empty($_POST['id'])  ) {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];
        $id = $_POST['id'];
        $descripcion = $_POST['descripcion'];
          
          $dao -> actualizarProducto($id,$nombre,$precio,$descripcion, $imagen); 
            

      } else {
          echo "No se recibió ningun producto.";
      }
      
    } 
  } 
  

  

}