<?php
include '../php/conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasenha = $_POST['contrasenha'];
$contrasenhaConfirm = $_POST['contrasenhaConfirm'];


class controladorRegistro extends Conexion {

    public static function registrarUsuario($nombre,$apellido,$telefono,$cedula,$correo,$usuario,$contrasenha,$contrasenhaConfirm){

        $cn = self::conectar();

        if ($cn and ($contrasenha == $contrasenhaConfirm)) {
            try {
                $sql = "INSERT INTO `tblusuarios`( `username`, `password`, `rol`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`) 
                        VALUES (:usuario, :contrasenha, 2 , :nombre, :apellido , :cedula , :telefono, :correo )";
                $ps = $cn->prepare($sql);

                $ps->bindParam(':usuario', $usuario);
                $ps->bindParam(':contrasenha', $contrasenha);
                $ps->bindParam(':nombre', $nombre);
                $ps->bindParam(':apellido', $apellido);
                $ps->bindParam(':cedula', $cedula);
                $ps->bindParam(':telefono', $telefono);
                $ps->bindParam(':correo', $correo);

                $ps->execute();

                if ($ps->rowCount() > 0) {
                    echo "<script>alert('Registro Exitoso');</script>";
                    echo "<script>window.location.href = '../html/login.php';</script>";
                   
                    exit(); 
                    
                } else {
                    echo "<script>alert('Registro Incorrecto');</script>";
                    echo "<script>window.location.href = '../html/registro.php';</script>";
                    exit(); 
                }
               
                
            } catch (PDOException $e) {
                echo "Error en la insercion: " . $e->getMessage();
            }
        }else{
          
                echo "<script>alert('Error al validar la contraseña');</script>";
                echo "<script>window.history.back();</script>";
                exit(); 
        }


    }

}

$registroController = new controladorRegistro();
$registroController ->registrarUsuario($nombre,$apellido,$telefono,$cedula,$correo,$usuario,$contrasenha,$contrasenhaConfirm);

?>