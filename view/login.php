
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="./cristal.css">
  <title>Document</title>
  <title>Login</title>
</head>

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">

  <div class="glassmorphism p-5 text-white" style="width: 25rem;">

    <form action="../controller/controladorLogin.php" method="post">
      <div class="d-flex justify-content-center ">

        <img src=" ../svg/person-circle.svg" alt="login-icon" style="height: 7rem;">
      </div>
      <div class="text-center fs-1 fw-bold">Iniciar Sesión</div>
      <div class="input-group mt-4">
        <div class="input-group-text  bg-secondary">
          <img src="../svg/person-bounding-box.svg" alt="" style="height: 1rem;">
        </div>

        <input class="form-control" type="text" name="user" id="user" placeholder="Usuario" required autofocus>

      </div>
      <div class="input-group mt-3">
        <div class="input-group-text bg-secondary">
          <img src="../svg/lock-fill.svg" alt="" style="height: 1rem;">
        </div>

        <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña" required>

      </div>
      <button class="btn btn-primary text-white w-100 mt-4 " type="submit">Iniciar Sesion</button>
    <div class="row text-center mt-3">
      <div class="col-6">
        <a href="../view/index.php" class="text-white">Volver</a>
      </div>
      <div class="col-6">
        
      <a href="./registro.php" class="text-white">Registrarse</a>
      </div>
    </div>
  </div>
</body>

</html>