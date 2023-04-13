<?php
@include 'config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactos - SalvaTour</title>
</head>

<body>

  <!-- START MENU  -->

  <?php include 'layout/_menu.php' ?>

  <!-- MENU END  -->

  <div class="container">
    <div class="row text-center m-3 fw-bolder">
      <h1>Formulario de contacto</h1>
    </div>

    <form action="" method="post">
      <div class="contenedor">
        <div class="cont-img">
          <img src="img/logo.png" alt="No disponible">
        </div>
        <div class="cont-form">
          <div class="form-floating mb-3 mt-3">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" style="margin-left: 10px;">Nombre</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="lastname" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" style="margin-left: 10px;">Apellido</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" style="margin-left: 10px;">Correo</label>
          </div>

          <div class="form-floating mb-3">
            <textarea class="form-control" name="mensaje" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
            <label for="floatingPassword" style="margin-left: 10px;">Escribe un mensaje</label>
          </div>

          <div class="form-floating mb-3">
            <button class="btn btn-block w-100">Enviar</button>
          </div>
        </div>
      </div>
    </form>

  </div>

  <!-- START FOOTER -->

  <?php include 'layout/_footer.php'; ?>

  <!-- FOOTER END -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>