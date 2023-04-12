<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/reserva.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Salvatour - Reserva</title>
</head>

<body>
    <?php include 'layout/_menu.php' ?>
    <div class="containerpri">
        <div class="bod"></div>
        <!-- <div class="grad"></div> -->
        <div class="contenedor-reserva"></div>
        <div class="head">
            <div class="item">SalvaTour<span>Reserva</span></div>
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
    </div>

    <?php include 'layout/_footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>