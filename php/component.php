<?php

function component($productname, $productprice, $productimg, $productdate, $productid)
{
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"carrito.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <p class=\"card-text\">
                                $productdate
                            </p>
                            <h5>
                                <span class=\"price\">$$productprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Agregar <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid, $quantity)
{
    $element = "
             
        <div class=\"border rounded\">
            <div class=\"row bg-white\">
                <div class=\"col-md-3 pl-0\">
                    <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                </div>
                <div class=\"col-md-6\">
                    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items w-75\">
                        <h5 class=\"pt-2\">$productname</h5>
                        <small class=\"text-secondary\">Seller: dailytuition</small>
                        <h5 class=\"pt-2\">$$productprice</h5>
                        <button type=\"submit\" class=\"btn btn-warning\">Seguir comprando</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remover</button>
                    </form>
                </div>   
                <div class=\"col-md-3 py-5 plusminus\">
                    <form action=\"cart.php?action=minus&id=$productid\" method=\"post\">
                        <button type=\"submit\" name=\"minus\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                    </form>
                    <input type=\"text\" value=\"$quantity\" id=\"cantidad\" class=\"form-control w-25 d-inline\">
                    <form action=\"cart.php?action=plus&id=$productid\" method=\"post\">
                        <button type=\"submit\" name=\"plus\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                    </form>
                </div>
            </div>
        </div>

    
    ";
    echo  $element;
}
