<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = md5($_POST['password']);

    $selec = "SELECT * FROM usuarios WHERE Nom_usuario = '$username' && contrasenia = '$pass'";
    $result = mysqli_query($conn, $selec);
    
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('location:pages/reserva.php');
    } else {
        $error[] = "Incorrect password or username";
        echo $error[0] + " recargue";
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
    <div class="form-container">
        <form action="" method="post">
            <h3 class="title">Login Now</h3>
            <input type="text" name="username" placeholder="enter your email" class="box" required>
            <input type="password" name="password" placeholder="enter your password" class="box" required>

            <input type="submit" value="Login now" class="form-btn" name="submit">
            <p>don't have an account?<a href="register.php">Register now!</a></p>
        </form>
    </div>
</body>

</html>