<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Acerca de la empresa de turismo</title>
	<link rel="stylesheet" type="text/css" href="../css/acercade.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/slider.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/font.css">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<header>
		<div class="logo">
			<a href="#"><img src="../img/logo.png" alt="Logo"></a>
		</div>

		<div class="control-menu">
			<a href="#navigation" class="open"><span class="fas fa-bars"></span></a>
			<a href="#" class="close"><span class="fas fa-rectangle-xmark"></span></a>
		</div>

		<nav id="navigation">
			<ul class="nav-items">
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
					echo "<li><a href='#'><i class='fas fa-shopping-cart'></i></a></li>";
					echo "<li><p class='user-log'><span class='fas fa-user'></span> " . $_SESSION['username'] . "</p></li>";
					echo "<li><a href='../logout.php' class='logout'>Logout	<span class='fas fa-right-from-bracket'></span></a></li>";
				}
				/*  Falta terminar de implementar el login*/
				?>
			</ul>
		</nav>
	</header>

	<main>
		<section class="section-1">
			<h2>¿Quiénes somos?</h2>
			<div class="container-items">
				<div class="img-list">
					<img src="../img/logo.png" alt="No disponible">
				</div>
				<div class="text-list">

					<p>Somos una empresa de turismo fundada en el año XXXX que se dedica a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ratione unde magni quibusdam labore, obcaecati architecto ab soluta, possimus velit fugiat non pariatur in laboriosam, ducimus culpa doloremque eos veritatis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem iste voluptates eos perferendis, minima fugiat mollitia obcaecati. Perferendis, reprehenderit earum fugiat dicta et soluta dolorum maiores, facere, vero error beatae! </p>
				</div>
			</div>
		</section>

		<section class="section-2 tag">
			<h2>Nuestros servicios</h2>
			<div class="container-service">
				<div class="service">
					<h1>Turismo de aventura</h1>
					<img src="../img/acercade/turismo3.jpg" alt="No disponible">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsam neque sint modi ipsa? Molestiae, atque. </p>
				</div>
				<div class="service">
					<h1>Turismo rural</h1>
					<img src="../img/acercade/turismo2.jpg" alt="No disponible">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsam neque sint modi ipsa? Molestiae, atque.</p>
				</div>
				<div class="service">
					<h1>Turismo cultural</h1>
					<img src="../img/acercade/turimo1.png" alt="No disponible">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsam neque sint modi ipsa? Molestiae, atque.</p>
				</div>
			</div>
		</section>

		<section class="section-3 tag">
			<h2>Contacto</h2>
			<div class="container-info">
				<p>Puedes contactarnos a través de:</p>
				<ul>
					<li><strong>Teléfono:</strong> 123-456-7890</li>
					<li><strong>Correo electrónico:</strong> info@empresa.com</li>
					<li><strong>Dirección:</strong> Calle 123, Ciudad, País</li>
				</ul>
			</div>
		</section>
	</main>

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
						¡Hola! Si te gusta viajar y quieres estar al tanto de todos los tours que comparto, te invito a
						seguirme en
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script>
		$(document).on("scroll", function() {
			var pageTop = $(document).scrollTop();
			var pageBottom = pageTop + $(window).height();
			var tags = $(".tag");

			for (var i = 0; i < tags.length; i++) {
				var tag = tags[i];
				if ($(tag).position().top < pageBottom) {
					$(tag).addClass("visible");
				} else {
					$(tag).removeClass("visible");
				}
			}
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
	</script>
</body>

</html>