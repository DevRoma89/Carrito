<?php 
    session_start();
    $mensaje=" ";
    if (isset($_POST['btnAccion'])) {
        $ID=$_POST['id'];
        $NOMBRE=$_POST['nombre'];
        $PRECIO=$_POST['precio'];
        $CANTIDAD=$_POST['cantidad'];
        //$mensaje= $NOMBRE . " se agrego correctamente al carrito...";

        if (!isset($_SESSION['carrito'])) {
            $PRODUCTO = array (
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'PRECIO'=>$PRECIO,
                'CANTIDAD'=>$CANTIDAD
            );
            $_SESSION['carrito'][0]=$PRODUCTO;
        }else{
            $NumeroProductos=count($_SESSION['carrito']);
            $PRODUCTO = array (
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'PRECIO'=>$PRECIO,
                'CANTIDAD'=>$CANTIDAD
            );
            $_SESSION['carrito'][$NumeroProductos]=$PRODUCTO;
            
        }
        $mensaje = print_r($_SESSION['carrito'],true);
    }
?>