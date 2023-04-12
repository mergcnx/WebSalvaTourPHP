<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destino - SalvaTour</title>
</head>


<body>

  <?php include '../layout/_menu-pages.php'; ?>

  <div class="margen">
    <div class="ti1">
      <div class="ti2">
        <div class="titulo">
          <h1><b>Bosque El Imposible</b></h1>
        </div>
      </div>
    </div>
    <div class="contenedor-video">
      <iframe class="video-frame" src="https://player.vimeo.com/video/695027679?h=65a3950b26&amp;background=1" width="900" height="930" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
    </div>

    <div class="contenedor contenido-principal">
      <main class="blog">
        <article class="entrada">

          <div class="entrada__contenido">
            <h4 class="no-ma">El Imposible</h4>
            <p>es una selva, en partes tropical y en otras sub-tropical. Ubicada sobre la Sierra de
              Apaneca-Ilamatepeque, posee la mayor biodiversidad en el país como parte de un bosque maduro, típico de
              los inicios de MesoaméEl Parque Nacional El Imposible, abierto al público desde 1997, ofrece al turista:
              áreas de acampar, un centro de interpretación, senderos interpretativos y convencionales, miradores, guías
              comunales, como también infraestructura adecuada para alojar a los visitantes.Para más información de este
              destino, puedes visitar el sitio del Ministerio de Medio Ambiente y Recursos Naturales <a href="https://www.marn.gob.sv/servicios/ingresoanp/">//bit.ly/3Xc5bNQ</a>Para más información,
              reservaciones de cabañas y permisos, puedes escribir al correo <a href="#">visitasanp@marn.gob.sv</a> o <a href="#">mmarcia@marn.gob.sv</a> Abierto las 24 horas </p>
          </div>
        </article>
      </main>
      <div class="contenedor-imagen">

        <ul class="slides">
          <input type="radio" name="radio-btn" id="img-1" checked />
          <li class="slide-container">
            <div class="slide">
              <img src="../img/bosqueimposible/imp1.jpg" alt="No disponible">
            </div>
            <div class="nav">
              <label for="img-5" class="prev">&#x2039;</label>
              <label for="img-2" class="next">&#x203a;</label>
            </div>
          </li>

          <input type="radio" name="radio-btn" id="img-2" />
          <li class="slide-container">
            <div class="slide">
              <img src="../img/bosqueimposible/imp2.jpg" alt="No disponible">
            </div>
            <div class="nav">
              <label for="img-1" class="prev">&#x2039;</label>
              <label for="img-3" class="next">&#x203a;</label>
            </div>
          </li>

          <input type="radio" name="radio-btn" id="img-3" />
          <li class="slide-container">
            <div class="slide">
              <img src="../img/bosqueimposible/imp3.jpg" alt="No disponible">
            </div>
            <div class="nav">
              <label for="img-2" class="prev">&#x2039;</label>
              <label for="img-4" class="next">&#x203a;</label>
            </div>
          </li>

          <input type="radio" name="radio-btn" id="img-4" />
          <li class="slide-container">
            <div class="slide">
              <img src="../img/bosqueimposible/imp4.jpg" alt="No disponible">
            </div>
            <div class="nav">
              <label for="img-3" class="prev">&#x2039;</label>
              <label for="img-5" class="next">&#x203a;</label>
            </div>
          </li>

          <input type="radio" name="radio-btn" id="img-5" />
          <li class="slide-container">
            <div class="slide">
              <img src="../img/bosqueimposible/imp5.jpg" alt="No disponible">
            </div>
            <div class="nav">
              <label for="img-4" class="prev">&#x2039;</label>
              <label for="img-1" class="next">&#x203a;</label>
            </div>
          </li>

          <li class="nav-dots">
            <label for="img-1" class="nav-dot" id="img-dot-1"></label>
            <label for="img-2" class="nav-dot" id="img-dot-2"></label>
            <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            <label for="img-4" class="nav-dot" id="img-dot-4"></label>
            <label for="img-5" class="nav-dot" id="img-dot-5"></label>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="H2"></div>

  <div class="servicios">
    <section class="imagen-turistica">
      <!-- <h3>Diseño Web</h3> -->

      <div class="contenedor-imagen-turistica">
        <img src="../img/bosqueimposible/imp6.jpg" alt="No disponible">
      </div>

      <p>Con sus casi 5,000 hectáreas, El Imposible alberga 500 especies de mariposas, 400 especies de árboles, 279
        especies de aves y 100 especies de mamíferos. Posee cerca 400 especies de árboles. Dos de ellas son nuevas para
        la ciencia y exclusivas de esta área natural </p>
    </section>

    <section class="imagen-turistica">
      <!-- <h3>Aplicaciones Web</h3> -->

      <div class="contenedor-imagen-turistica">
        <img src="../img/bosqueimposible/imp7.jpg" alt="No disponible">
      </div>

      <p>El Parque Nacional El Imposible, abierto al público desde 1997, ofrece: áreas de acampar, un centro de
        interpretación, senderos interpretativos y convencionales, miradores, guías comunales, un hostal ecológico con
        energía solar y cómodas cabañas.</p>
    </section>

    <section class="imagen-turistica">
      <!-- <h3>E-commerce</h3> -->

      <div class="contenedor-imagen-turistica">
        <img src="../img/bosqueimposible/imp8.jpg" alt="No disponible">
      </div>

      <p>Si usted desea visitar el Bosque El Imposible, debe obtener permiso de ingreso en las oficinas de la Fundación
        Ecológica SALVANATURA de El Salvador, ubicadas en Colonia Flor Blanca, 33 Av. Sur # 640. Teléfono: <b>(503)
          2279-1515</b>.</p>
    </section>
  </div>

  <div class="H3"></div>
  <div class="contenido-principal contenido-maps">
    <main class="blog">
      <article class="entrada">
        <div class="entrada__contenido">
          <p><strong>¿Como llegar?</strong> Ubicado en el departamento de Ahuachapán, el acceso es a través de carretera
            pavimentada (CA-12) que conduce de Sonsonate hacia la frontera La Hachadura. En el kilómetro 106,
            inmediatamente después del puente Ahuachapío, gire a la derecha donde accederá a El Imposible por un camino
            de tierra.
          <p>
        </div>
      </article>
    </main>
    <div class="mapaimposible">
      <iframe class="mapaRimpo" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d61985.53010903418!2d-89.96968629674109!3d13.833295757972202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x8f62a13501443f5f%3A0x21f260e3d4906f2!2sParque%20Nacional%20El%20Imposible%20Caser%C3%ADo%20El%20Coco!3m2!1d13.8332149!2d-89.9346668!5e0!3m2!1ses-419!2ssv!4v1680029499232!5m2!1ses-419!2ssv" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <a href="../reserva.php" class="btn btn-block btn-primary">Reservar</a>


  <?php include '../layout/_footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

</body>

</html>