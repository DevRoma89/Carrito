
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
<<<<<<< HEAD:html/login.php
  <link rel="stylesheet" href="cristal.css">
  <title>Document</title>
=======

  <title>Login</title>
>>>>>>> e37043eee6fec182dba995013db8461b30263c39:view/login.php
</head>

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">

<<<<<<< HEAD:html/login.php
  <div class="glassmorphism p-5 text-white" style="width: 25rem;">
=======
  <div class="bg-white p-5 rounded-5 text-secondary  " style="width: 25rem;">
>>>>>>> e37043eee6fec182dba995013db8461b30263c39:view/login.php

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
<<<<<<< HEAD:html/login.php
      <button class="btn btn-primary text-white w-100 mt-4 " type="submit">Iniciar Sesion</button>
    </form>
    <div class="text-center mt-3">
      <a href="./registro.php" class="text-white">Registrarse</a>
=======
      <button class="btn btn-secondary text-white w-100 mt-4 " type="submit">Iniciar Sesion</button>
      
    </form>
    <div class="row text-center mt-3">
      <div class="col-6">
        <a href="../index.php" class="text-info">Volver</a>
      </div>
      <div class="col-6">
        
      <a href="./registro.php" class="text-info">Registrarse</a>
      </div>
>>>>>>> e37043eee6fec182dba995013db8461b30263c39:view/login.php
    </div>
  </div>
</body>

</html>