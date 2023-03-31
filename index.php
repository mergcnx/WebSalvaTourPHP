<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Inicio - SalvaTour</title>
</head>
<header>
  <div class="logo">
    <a href="#"><img src="img/logo.png" alt="Logo"></a>
  </div>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="pages/acercade/acercade.html">Acerca de</a></li>
      <li>
        <a href="#">Destinos</a>
        <ul>
          <li><a href="#">Destino 1</a></li>
          <li><a href="#">Destino 2</a></li>
          <li><a href="#">Destino 3</a></li>
        </ul>
      </li>
      <li><a href="pages/contactos/contactos.html">Contacto</a></li>

      <li><input class="form-control" type="text" id="search" placeholder="Buscar..."></li>
      <?php
      if (isset($_SESSION['usermail'])) {
        echo "<li><a href='#' class='logout'>Logout</a></li>";
      }
/*  Falta terminar de implementar el login*/
      ?>
    </ul>
  </nav>
</header>

<body>


  <!--SECCION SLIDER-->
  <div class="slider-frame">
    <div class="slider">
      <div class="slide">
        <img src="img/slider/citalaban.jpg" alt="Image 1">
      </div>
      <div class="slide">
        <img src="img/slider/cobanosBan.jpg" alt="Image 2">
      </div>
      <div class="slide">
        <img src="img/slider/imposibleBan.jpg" alt="Image 3">
      </div>
      <div class="slide">
        <img src="img/slider/Lago-de-coatepequeban.jpg" alt="Image 4">
      </div>
      <div class="slide">
        <img src="img/slider/lago-suchitlanban.jpg" alt="Image 5">
      </div>
      <div class="slide">
        <img src="img/slider/lago-suchitlanban.jpg" alt="Image 6">
      </div>
      <div class="slide">
        <img src="img/slider/moncrisban.jpg" alt="Image 7">
      </div>
      <div class="slide">
        <img src="img/slider/sanandresban.jpg" alt="Image 8">
      </div>
      <div class="slide">
        <img src="img/slider/volcachaban.jpg" alt="Image 9">
      </div>
    </div>
  </div>

  <section>
    <div class="boxesContainer">

      <div class="textBox">
        <div class="">
          <p>
            Los tours vacacionales son una forma emocionante de explorar nuevos lugares, experimentar diferentes
            culturas y
            crear recuerdos duraderos. En este texto, presentaré algunas experiencias de personas en tours vacacionales
            para
            inspirar a aquellos que estén buscando su próxima aventura.
          </p>
        </div>
      </div>

      <div class="cardBox">
        <div class="cardb">
          <div class="front" style="background-image: url(img/index_cards/cards1.jpg);background-size: 100% 100%;">
            <h3>Jorge Mendoza</h3>
            <p style="color: black;font-weight: 800;">Nos cuenta su experiencia</p>
          </div>
          <div class="back">
            <h3>Experiencia</h3>
            <p>Conocí a una pareja que decidió hacer un tour de vino en la región de Toscana en Italia. Durante su
              viaje,
              visitaron algunas de las mejores bodegas de la región y probaron una variedad de vinos locales.</p>
          </div>
        </div>
      </div>

      <div class="cardBox">
        <div class="cardb">
          <div class="front" style="background-image: url(img/index_cards/cards2.jpg);background-size: 100% 100%;">
            <h3>Juana Lara</h3>
            <p style="color: rgb(27, 249, 7);font-weight: 800;">Nos cuenta su experiencia</p>
          </div>
          <div class="back">
            <h3>Experiencia</h3>
            <p>
              Durante su viaje, visitaron templos antiguos en Tailandia, disfrutaron de la cocina local en Vietnam y
              experimentaron la emoción de la vida nocturna en Singapur. La familia dijo que este tour les permitió
              experimentar la diversidad cultural.
            </p>
          </div>
        </div>
      </div>

      <div class="cardBox">
        <div class="cardb">
          <div class="front" style="background-image: url(img/index_cards/cards3.jpg);background-size: 100% 100%;">
            <h3>Josseline Alemán</h3>
            <p style="color: black;font-weight: 800;">Nos cuenta su experiencia</p>
          </div>
          <div class="back">
            <h3>Experiencia</h3>
            <p>me encontré con un viajero solitario que tomó un tour en un safari en África. Durante su viaje, vio
              animales
              salvajes en su hábitat natural, incluyendo leones, elefantes y jirafas.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SECCIÓN VIDEO -->

  <section class="secvideo">
    <p id="txtvideo">El Salvador es una pequeña nación de América Central. Es conocida por sus playas en el océano
      Pacífico, los sitios de surf y el paisaje montañoso. Su Ruta de las Flores es un camino serpenteante que pasa por
      plantaciones de café, bosques tropicales con cascadas y ciudades como Juayúa, con sus festivales gastronómicos
      cada fin de semana, junto con Ataco, donde hay alegres murales. La capital, San Salvador, con volcanes como un
      espectacular telón de fondo, tiene varios museos y el Teatro.
      Un poco más alejado, la famosa Puerta del Diablo en Panchimalco, termina por complementar los atractivos de esta
      capital, un espectacular mirador natural que permite vistas panorámicas hacia las bellezas naturales de la zona,
      mágico escenario donde convergen las aguas del Océano Pacífico, el lago de Ilopango, el cerro de las Pavas y el
      Volcán de San Vicente.
    </p>



    <iframe src="https://www.youtube.com/embed/PdNPuDR0gME?autoplay=1&mute=1&loop=1" class="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <!-- <video src="https://www.youtube.com/embed/PdNPuDR0gME" width="640" height="480"></video> -->
  </section>

  <!-- SEGUNDA SECCIÓN -->



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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

</body>

</html>