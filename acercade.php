<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Acerca de la empresa de turismo</title>
</head>

<body>
	<!-- START MENU  -->

	<?php include 'layout/_menu.php' ?>

	<!-- MENU END  -->

	<main>
		<section class="section-1">
			<h2>¿Quiénes somos?</h2>
			<div class="container-items">
				<div class="img-list">
					<img src="img/logo.png" alt="No disponible">
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
					<img src="img/acercade/turismo3.jpg" alt="No disponible">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsam neque sint modi ipsa? Molestiae, atque. </p>
				</div>
				<div class="service">
					<h1>Turismo rural</h1>
					<img src="img/acercade/turismo2.jpg" alt="No disponible">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsam neque sint modi ipsa? Molestiae, atque.</p>
				</div>
				<div class="service">
					<h1>Turismo cultural</h1>
					<img src="img/acercade/turimo1.png" alt="No disponible">
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

	<!-- START FOOTER -->

	<?php include 'layout/_footer.php'; ?>

	<!-- FOOTER END -->

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