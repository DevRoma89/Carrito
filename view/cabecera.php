
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Carrito</title>
</head>

<body >
    <!--Perfil del usuario-->
    <div class="modal fade" tabindex="-1" id="info_perfil">
        <div class="modal-dialog" style="position: fixed; right: 2%;">
            <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title">
                    Perfil
                    <?php if(($_SESSION['rol'])==1) {            
                        echo " Admin";
                    }?>
                </h5>
                
            </div>
            <div class="modal-body text-center">
                <h6>Usuario</h6>
                <?php echo $_SESSION['Nombre'] . " " . $_SESSION['Apellido']?>
                <h6>Correo</h6>
                <?php echo $_SESSION['email'] ?>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="?logout=true" class="btn btn-primary">Cerrar Sesión</a>
            </div>
            </div>
        </div>
    </div>

    <!--Barra de navegacion -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo de la empresa</a>
            <button class="navbar-toggler d-sm-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mt-2">
                    <!--Boton para volver al inicio-->
                    <li class="nav-item">
                        <a class="nav-link active" href="../view/index.php" aria-current="page">
                            Home
                        </a>
                    </li>
                    <!--Boton para revisar el carrito-->
                    <li class="nav-item">
                        <a class="nav-link active" href="../view/info_carrito.php">
                            Carrito 🛒 <?php echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito'])?>  
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php if(($_SESSION['rol'])==1) { ?>
                            <a class="nav-link active" href="../view/productos.php" aria-current="page">
                                Stock
                            </a>
                        <?php }?> 
                    </li>
                </ul>
                <!--Boton que despliega informacion del perfil del usuario o para iniciar sesión-->
                <?php if(isset($_SESSION['Nombre_Usuario'])) { ?>
                    
                    <a href="#" class = "ms-auto" data-bs-toggle="modal" data-bs-target="#info_perfil">
                        <img src="../svg/person-circle.svg" alt="" style = "height: 2rem">
                    </a>
                <?php } else { ?>
                    <a class = "btn btn-primary ms-auto rounded-pill" href="../view/login.php">Iniciar Sesión</a>
                <?php } ?>
            </div>
        </div>
    </nav>
    </br>
