<?php 
    session_start();
    $mensaje="";
    if (isset($_POST['btnAccion'])) {
        
        //$mensaje= $NOMBRE . " se agrego correctamente al carrito...";

        switch ($_POST['btnAccion']) {
            case 'Agregar':
                if (!isset($_SESSION['carrito'])) {
                    $PRODUCTO = array (
                        'ID'=>$_POST['id'],
                        'NOMBRE'=>$_POST['nombre'],
                        'PRECIO'=>$_POST['precio'],
                        'CANTIDAD'=>$_POST['cantidad']
                    );
                    $_SESSION['carrito'][0]=$PRODUCTO;
                }else{
                    $NumeroProductos=count($_SESSION['carrito']);
                    $PRODUCTO = array (
                        'ID'=>$_POST['id'],
                        'NOMBRE'=>$_POST['nombre'],
                        'PRECIO'=>$_POST['precio'],
                        'CANTIDAD'=>$_POST['cantidad']+1
                    );
                    $_SESSION['carrito'][$NumeroProductos]=$PRODUCTO;
                    
                }
                $mensaje = "Se añadio ". $_POST['nombre']. " al carrito";
                break;
            
            case 'Eliminar':
                foreach ($_SESSION['carrito'] as $indice=>$PRODUCTO) {
                    if ($PRODUCTO['ID'] == $_POST['id']) {
                        unset($_SESSION['carrito'] [$indice]);
                        echo "<script> alert('Producto eliminado correctamente'); </script>";
                    }
                }
            break;
        }
               
    }
?>