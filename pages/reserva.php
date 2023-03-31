<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reserva.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <title>Salvatour - Reserva</title>
</head>

<header>
  <div class="logo">
    <a href="#"><img src="../img/logo.png" alt="Logo"></a>
  </div>
  <nav>
    <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="acercade.php">Acerca de</a></li>
      <li>
        <a href="#">Destinos</a>
        <ul>
          <li><a href="bosqueImposible.php">Bosque El Imposible</a></li>
          <li><a href="#">Citalá</a></li>
          <li><a href="#">Lago de Coatepeque</a></li>
          <li><a href="#">Laguna de Guija</a></li>
          <li><a href="#">Playa los Cóbanos</a></li>
          <li><a href="#">Parque Nacional Montecristo</a></li>
          <li><a href="#">Ruinas de San Andrés</a></li>
          <li><a href="#">Volcán Chaparrastique</a></li>
        </ul>
      </li>
      <li><a href="contactos.php">Contacto</a></li>

      <li id="search"><input class="form-control" type="text" placeholder="Buscar..."></li>
      <?php
      if (isset($_SESSION['username'])) {
        echo "<li><a href='https://www.facebook.com'><i class='fas fa-shopping-cart'></i></a></li>";
        echo "<li><p class='user-log'>" . $_SESSION['username'] . "</p></li>";
        echo "<li><a href='../logout.php' class='logout'>Logout</a></li>";
      }
      /*  Falta terminar de implementar el login*/
      ?>
    </ul>
  </nav>
</header>

<body>
    <div class="body"> </div>
    <div class="grad"></div>
    <div class="header">
        <div>SalvaTour<span>Reserva</span></div>
    </div>
    <br>
    <div class="reserva">
        <input type="text" placeholder="Nombre" name="name" class="text1"><br>
        <input type="text" placeholder="apellido" name="apellido" class="text2"><br>
        <input type="text" placeholder="Correo" name="email" class="text3"><br>
        <input type="text" placeholder="telefono" name="cel" class="text4"><br>
        <input type='date'><br>
        <input type='time' placeholder="Tiempo"><br>
        <input type="number" placeholder="Cantidad de personas"><br>
        <input type="button" value="Reservar">
    </div>

    <!-- FOOTER -->

    <!-- <section class="footer-main">
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
    </section> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>