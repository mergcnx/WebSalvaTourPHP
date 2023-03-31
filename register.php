<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $nom_user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $nombre = mysqli_real_escape_string($conn, $_POST['name']);
    $apellido = mysqli_real_escape_string($conn, $_POST['lastname']);
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $select = "SELECT * FROM usuarios WHERE Nom_usuario = '$nom_user'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not mathched!';
        } else {
            $insert = "INSERT INTO usuarios(Nombre, Apellido, Nom_usuario, contrasenia, telefono, correo) VALUES ('$nombre', '$apellido','$nom_user', '$pass','$telefono','$correo')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
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
    <title>Document</title>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3 class="title">Register Now</h3>
            <input type="text" name="username" placeholder="enter your username" class="box" required>
            <input type="password" name="password" placeholder="enter your password" class="box" required>
            <input type="password" name="cpassword" placeholder="Confirm your password" class="box" required>

            <input type="text" name="name" placeholder="Your name here" class="box" required>
            <input type="text" name="lastname" placeholder="Your lastname here" class="box" required>
            <input type="number" name="telefono" placeholder="Your phone here" class="box" required>
            <input type="email" name="correo" placeholder="Your email here" class="box" required>


            <input type="submit" value="Register now" class="form-btn" name="submit">
            <p>Already have an account?<a href="login.php">Login now!</a></p>
        </form>
    </div>
</body>

</html>