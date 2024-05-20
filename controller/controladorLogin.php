<?php
include '../php/conexion.php';
$user = $_POST['user'];
$pass = $_POST['pass'];

class controladorLogin extends Conexion
{
    public function validarLogin($user, $pass)
    {
        $cn = self::conectar();

        if ($cn) {
            try {
                $sql = "SELECT username, password FROM tblusuarios WHERE username = :user AND password = :pass";
                $ps = $cn->prepare($sql);

                $ps->bindParam(':user', $user);
                $ps->bindParam(':pass', $pass);

                $ps->execute();

                if ($ps->rowCount() > 0) {
                    echo "<script>alert('Credenciales ingresadas correctamente');</script>";
                    echo "<script>window.location.href = '../index.php';</script>";
                   
                    exit(); // Detener el script después de redirigir
                    
                } else {
                    echo "<script>alert('error: usuario o contraseña incorrecto');</script>";
                    echo "<script>window.location.href = '../html/login.php';</script>";                   
                    exit(); // Detener el script después de redirigir
                }
            } catch (PDOException $e) {
                echo "Error en la consulta: " . $e->getMessage();
            }
        }
    }
}

$loginController = new controladorLogin();
$loginController->validarLogin($user, $pass);
?>
