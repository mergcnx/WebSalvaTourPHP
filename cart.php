<?php
$baseUrl = 'http://localhost/WebSalvaTourPHP/receptor.php';

session_start();

require_once "php/CreateDb.php";
require_once "php/component.php";

// $db = new CreateDb("Productdb", "Producttb");
$db = new CreateDb("salvatourdb", "producto");

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
if (isset($_POST['minus'])) {
    if ($_GET['action'] == 'minus') {
        $product_id    = $_GET['id'];
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($product_id, $item_array_id)) {
            $item_index = array_search($product_id, $item_array_id);
            $cant       = $_SESSION['cart'][$item_index]['cant'];
            if ($cant > 1) {
                $_SESSION['cart'][$item_index]['cant'] -= 1;
            }
            header('location:cart.php');
        }
    }
}
if (isset($_POST['plus'])) {
    if ($_GET['action'] == 'plus') {
        $product_id    = $_GET['id'];
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($product_id, $item_array_id)) {
            $item_index = array_search($product_id, $item_array_id);
            $cant       = $_SESSION['cart'][$item_index]['cant'];
            $_SESSION['cart'][$item_index]['cant'] += 1;
            // $_SESSION['cart'][$item_index][''];
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/cart.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body class="bg-light">

    <?php
    require_once 'layout/_menu.php';
    require_once 'php/header.php';
    ?>

    <div class="container-fluid">
        <div class="row px-5 mt-4">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h2>Mi carrito</h2>
                    <hr>

                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        if ($count > 0) {
                            $product_id = array_column($_SESSION['cart'], 'product_id');
                            $result = $db->getData();
                            if ($result != null) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $item_index = array_search($row['id'], $product_id);
                                    $cant = $_SESSION['cart'][$item_index]['cant'];
                                    foreach ($product_id as $id) {
                                        if ($row['id'] == $id) {
                                            cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id'], $cant);
                                            $total = $total + (int) $row['product_price'] * (int)$cant;
                                        }
                                    }
                                }
                            }
                        } else {
                            echo "<h5>Cart is Empty</h5>";
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">
                        <h2>DETALLES</h2>
                        <hr>
                        <div class="row price-details">
                            <div class="col-md-6">
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    $count = count(
                                        $_SESSION['cart']
                                    );
                                    echo "<h6>Items</h6>";
                                    echo "<h6>Cantidad</h6>";
                                    echo "<h6>Precio ($count items)</h6>";
                                } else {
                                    echo "<h6>Precio (0 items)</h6>";
                                }
                                ?>
                                <h6>Cargos</h6>
                                <hr>
                                <h6>Cantidad a pagar</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="business" value="vendedor@business.example.com">
                                <input type="hidden" name="cmd" value="_xclick">
                                <h6>
                                    <?php
                                    echo "<input type=\"text\" name=\"item_name\" id=\"\" value=\"Items\" readonly style=\"border:none\" required=\"\">";
                                    ?>
                                </h6>
                                <h6>
                                    <?php
                                    echo "<input type=\"text\" name=\"quantity\" id=\"\" value=\"$count\" readonly style=\"border:none\" required=\"\">";
                                    ?>
                                </h6>
                                <h6>$<?php

                                        echo "<input type=\"text\" name=\"amount\" id=\"\" value=\"$total\" readonly style=\"border:none\" required=\"\">";
                                        ?></h6>
                                <h6 class="text-success">FREE</h6>
                                <hr>
                                <h6>$<?php
                                        echo $total;
                                        ?></h6>
                            </div>
                            <input type="hidden" name="item_number" value="1">
                            <!-- <input type="hidden" name="invoice" value="0012"> -->

                            <input type="hidden" name="lc" value="es_ES">
                            <input type="hidden" name="no_shipping" value="1">
                            <input type="hidden" name="image_url" value="https://picsum.photos/150/150">
                            <input type="hidden" name="return" value="<?= $baseUrl ?>/receptor.php">
                            <input type="hidden" name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">
                        </div>
                        <div class="btn-container">
                            <button type="submit" class="btn-paypal">Pagar ahora con Paypal!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div style="position:relative;bottom: 0; margin-top: 20px;">
        <?php require_once 'layout/_footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>