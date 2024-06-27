<?php
include '../php/conexion.php';


class ProductosDAO extends Conexion
{

    public static function listarProductos()
    {
        $cn = self::conectar();

        try {

            $sql = "SELECT * FROM tblproductos";

            $ps = $cn->prepare($sql);
            $ps->execute();
            return $productos = $ps->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function insertarProducto($nombre, $precio, $imagen,$descripcion)
    {
        $cn = self::conectar();

        try {

            $sql = 'INSERT INTO tblproductos (Nombre,Precio,Imagen,Descripcion) VALUES(:nombre,:precio,:imagen,:descripcion)';

            $ps = $cn->prepare($sql);
            $ps->bindParam(':nombre', $nombre);
            $ps->bindParam(':precio', $precio);
            $ps->bindParam(':imagen', $imagen);
            $ps->bindParam(':descripcion', $descripcion);

            $ps->execute();
            echo "<script>window.location.href = '../view/productos.php';</script>";
            exit;
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function actualizarProducto($id,$nombre,$precio,$descripcion,$imagen)
    {
          $cn = self::conectar();

          try {
            
            $sql = "UPDATE tblproductos 
                    SET Nombre = :nombre, 
                        Precio = :precio, 
                        Descripcion = :descripcion, 
                        Imagen = :imagen 
                    WHERE Id = :id" ;
                    
            $ps = $cn->prepare($sql);
            $ps->bindParam( ':nombre', $nombre);
            $ps->bindParam( ':precio', $precio);
            $ps->bindParam( ':descripcion', $descripcion);
            $ps->bindParam( ':imagen', $imagen);
            $ps->bindParam( ':id', $id);

            echo $ps->execute();
            echo "<script>window.location.href = '../view/productos.php';</script>";
            exit;

            
          } catch (\Throwable $th) {
            //throw $th;
          }

    }

    public static function borrarProducto($id)
    {
        
            $cn = self::conectar();
            try {

                $sql = "DELETE FROM `tblproductos` WHERE Id = :Id;";
                $ps = $cn->prepare($sql);
                $ps->bindParam(':Id', $id);
                $ps->execute();

                echo "<script>window.location.href = '../view/productos.php';</script>";
                exit;
            } catch (PDOException $e) {
                //throw $th;
            }
        
    }


}
