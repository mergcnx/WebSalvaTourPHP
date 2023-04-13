<?php
@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = md5($_POST['password']);

    $selec = "SELECT * FROM usuario WHERE user_name = '$username' && password = '$pass'";
    $result = mysqli_query($conn, $selec);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('location:reserva.php');
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font.css">
    <title>SalvaTour - Login</title>
</head>

<body>
    <header>
        <h1>SalvaTour </h1>
        <h3>Sistema de login y registro </h3>
    </header>

    <main>
        <form id="login_form" class="form_class" action="" method="post">
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" name="username" type="text" placeholder="Enter your username" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="password" type="password" placeholder="Enter your password">
                <input class="submit_class" type="submit" name="submit" form="login_form" onclick="return validarLogin()" value="Ingresar" />
            </div>
            <div class="info_div">
                <p>You don't have an account? <a href="register.php">Register!</a></p>
            </div>
        </form>
    </main>
</body>

</html>