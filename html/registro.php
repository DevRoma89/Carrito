<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="cristal.css">
    <title>Document</title>
</head>

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">

    <div class="glassmorphism p-5 text-white" style="width: 30rem;">

        <form action="../controller/controladorRegistro.php" method="post">
            <div class="d-flex justify-content-center ">
                <img src="../svg/person-vcard.svg" alt="login-icon" style="height: 7rem;">
            </div>

            <div class="text-center fs-1 fw-bold">Registro</div>

            <div class="input-group mt-4">
                <input class="form-control me-1" 
                    type="text" 
                    name="nombre" 
                    id="nombre" 
                    placeholder="Nombre" 
                    required autofocus>
                <input class="form-control ms-1" 
                    type="text" 
                    name="apellido" 
                    id="apellido" 
                    placeholder="Apellido" 
                    required autofocus>
            </div>

            <div class="input-group mt-2">
                <input class="form-control me-1" 
                    type="text" 
                    name="telefono" 
                    id="telefono" 
                    placeholder="Telefono" 
                    required autofocus>
                <input class="form-control ms-1" 
                    type="text" 
                    name="cedula" 
                    id="cedula" 
                    placeholder="Cedula" 
                    required autofocus>
            </div>

            <div class="input-group mt-2">
                <input class="form-control" 
                    type="text" 
                    name="correo" 
                    id="correo" 
                    placeholder="Correo" 
                    required autofocus>
            </div>

            <div class="input-group mt-2">
                <input class="form-control" 
                    type="text" 
                    name="usuario" 
                    id="usuario" 
                    placeholder="Nombre de Usuario" 
                    required autofocus>
            </div>

            <div class="input-group mt-2">
                <input class="form-control me-1" 
                    type="password" 
                    name="contrasenha" 
                    id="contrasenha" 
                    placeholder="Contraseña" 
                    required autofocus>
                <input class="form-control ms-1" 
                    type="password" 
                    name="contrasenhaConfirm" 
                    id="contrasenhaConfirm" 
                    placeholder="Confirmar Contraseña"
                    required autofocus>
            </div>
            <button class="btn btn-primary text-white w-100 mt-4 " type="submit">Registrarse</button>
        </form>
        <div class="text-center mt-3">
            <a href="./login.php" class="text-white">Iniciar Sesión</a>
        </div>
    </div>
</body>

</html>