<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contacto.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Contactos - SalvaTour</title>
</head>
<header>
  <div class="logo">
    <a href="#"><img src="../img/logo.png" alt="Logo"></a>
  </div>
  <nav>
    <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../pages/acercade.php">Acerca de</a></li>
      <li>
        <a href="#">Destinos</a>
        <ul>
          <li><a href="#">Destino 1</a></li>
          <li><a href="#">Destino 2</a></li>
          <li><a href="#">Destino 3</a></li>
        </ul>
      </li>
      <li><a href="contactos.php">Contacto</a></li>

      <li><input class="form-control" type="text" id="search" placeholder="Buscar..."></li>
      <li><a href="#" class="logout">Logout</a></li>
    </ul>
  </nav>
</header>

<body>

  <div class="container">
    <div class="row text-center m-3 fw-bolder">
      <h1>Formulario de contacto</h1>
    </div>

    <div class="contenedor">
      <div class="cont-img">
        <img src="../img/logo.png" alt="No disponible">
      </div>
      <div class="cont-form">
        <div class="form-floating mb-3 mt-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput" style="margin-left: 10px;">Nombre</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword" style="margin-left: 10px;">Apellido</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword" style="margin-left: 10px;">Correo</label>
        </div>

        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
          <label for="floatingPassword" style="margin-left: 10px;">Escribe un mensaje</label>
        </div>

        <div class="form-floating mb-3">
          <button class="btn btn-block w-100">Enviar</button>
        </div>
      </div>
    </div>
   
  </div>

  <!-- FOOTER -->

  <section class="footer-main">
    <footer>
      <div class="rows primary">
        <div class="column links">
          <h3>MARN</h3>
          <ul>
            <li>medioambiente@marn.gob.sv</li>
            <li>Teléfono: 2132-9282</li>
            <li>Dirección: Santa Tecla</li>
          </ul>

        </div>

        <div class="column links">
          <h3>CORSATUR</h3>
          <ul>
            <li>imejía@corsatur.gob.sv</li>
            <li>Teléfono: 2241-3200</li>
            <li>Dirección: San Salvador</li>
          </ul>
        </div>


        <div class="column links">
          <h3>MITUR</h3>
          <ul>
            <li>jzambrana@mitur.gob.sv</li>
            <li>Teléfono: 2241-3200</li>
            <li>Dirección: San Salvador</li>
          </ul>
        </div>

        <div class="column about">
          <h3>Redes sociales</h3>

          <p>
            ¡Hola! Si te gusta viajar y quieres estar al tanto de todos los tours que comparto, te invito a seguirme en
            mis redes sociales.
          </p>

          <div class="social">
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube-square"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp-square"></i></a>
          </div>

        </div>

      </div>

      <div class="rows copyright">
        <p>Copyright &copy; SalvaTour - 2023</p>
      </div>
    </footer>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>