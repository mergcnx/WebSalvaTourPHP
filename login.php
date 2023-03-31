<?php
@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = md5($_POST['password']);

    $selec = "SELECT * FROM usuarios WHERE Nom_usuario = '$username' && contrasenia = '$pass'";
    $result = mysqli_query($conn, $selec);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('location:pages/reserva.php');
    } else {
        $error[] = "Incorrect password or username";
        echo $error[0];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <h1>Sistema de login y registro </h1>
    <div class="contenedor">
        <div class="inicio-sesion">
            <form action="" method="post">
                <h2>Inicio de sesión</h2>
                <p><input type="text" name="username" placeholder="enter your email" class="nom" required></p>
                <p><input type="password" name="password" placeholder="enter your password" class="nom" required></p>

                <input type="submit" value="Ingresar" class="btn-sub" name="submit">
            </form>

        </div>
        <div class="registrar">
            <h3 class="reg-title">¿Aún no tienes una cuenta?</h3>
            <p class="reg-text">Registrate para que puedas iniciar sesión</p>
            <a href="register.php" class="reg-btn" >Register now!</a>
        </div>
    </div>
</body>

</html>