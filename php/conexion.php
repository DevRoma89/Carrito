<?php
include 'config.php';

class Conexion
{
    public static $servidor = "mysql:dbname=" . DB . ";host=" . SERVER;
    public static function conectar()
    {
        try {
             $cn = new PDO(self::$servidor, USER, PASS);
            
             return $cn; 

        } catch (PDOException $e) {
           
            echo $e;
        }
    }

    
}


?>
