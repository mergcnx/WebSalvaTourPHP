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

    $select = "SELECT * FROM usuario WHERE user_name = '$nom_user'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not mathched!';
        } else {
            $insert = "INSERT INTO usuario(nombre, apellido, user_name, password, email, telefono) VALUES ('$nombre', '$apellido','$nom_user', '$pass','$telefono','$correo')";
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font.css">
    <title>SalvaTour - Registro</title>
</head>

<body>
    <header>
        <h1>SalvaTour</h1>
        <h3>Bienvenido al registro de usuarios!</h3>
    </header>
    <main>
        <form id="login_form" class="form_class" action="" method="post">
            <div class="form_div">
                <h3 class="title">Register now</h3>
                <label>User name:</label>
                <input type="text" name="username" placeholder="enter your username" class="field_class" required>

                <label>Password:</label>
                <input type="password" name="password" placeholder="enter your password" class="field_class" required>

                <label>Confirm your password:</label>
                <input type="password" name="cpassword" placeholder="Confirm your password" class="field_class" required>

                <label>Name:</label>
                <input type="text" name="name" placeholder="Your name here" class="field_class" required>

                <label>Lastname:</label>
                <input type="text" name="lastname" placeholder="Your lastname here" class="field_class" required>

                <label>Phone:</label>
                <input type="number" name="telefono" placeholder="Your phone here" class="field_class" required>

                <label>Email:</label>
                <input type="email" name="correo" placeholder="Your email here" class="field_class" required>


                <input type="submit" value="Register now" class="submit_class" form="login_form" name="submit">
                <br>
                <p>Already have an account? <a href="login.php">Login now!</a></p>
            </div>
        </form>
    </main>

    <!-- <div class="form-container">

    </div> -->
</body>

</html>