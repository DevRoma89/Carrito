<?php
include '../php/conexion.php';
$user = $_POST['user'];
$pass = $_POST['pass'];

session_start();

class controladorLogin extends Conexion
{
    public function validarLogin($user, $pass)
    {
        $cn = self::conectar();

        if ($cn) {
            try {
                $sql = "SELECT * FROM tblusuarios WHERE username = :user AND password = :pass";
                $ps = $cn->prepare($sql);

                $ps->bindParam(':user', $user);
                $ps->bindParam(':pass', $pass);

                $ps->execute();

                if ($ps->rowCount() > 0) {
                    $result = $ps->fetch(PDO::FETCH_ASSOC);
                    echo "<script>alert('Credenciales ingresadas correctamente');</script>";
                    echo "<script>window.location.href = '../index.php';</script>";
                    $_SESSION['Nombre_Usuario'] = $result['username'];
                    $_SESSION['Nombre'] = $result['nombre'];
                    $_SESSION['Apellido'] = $result['apellido'];
                    $_SESSION['email'] = $result['correo'];
                   
                    exit(); // Detener el script después de redirigir
                    
                } else {
                    echo "<script>alert('error: usuario o contraseña incorrecto');</script>";
                    echo "<script>window.history.back();</script>";                   

                    echo "<script>alert('Login Incorrecto');</script>";
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
