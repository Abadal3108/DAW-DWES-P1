
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    //variables
    $shopping_cart = 160;

    $tipo = "cables";

    $shipping_price = 4.99;

    $descuento = 0;
    //conditional

    if ($shopping_cart < 20) {
        if ($tipo = "cables") {
            echo 'No se puede enviar';
        } else {
            echo 'Los gastos de envío son 4.99€', '<br>';
            $shopping_cart = $shipping_price + $shopping_cart;
            echo ' precio total = ', $shopping_cart, '€';
        }
    } elseif ($shopping_cart < 50) {
        echo 'Los gastos de envío son 4.99€', '<br>';
        $shopping_cart = $shipping_price + $shopping_cart;
        echo ' precio total = ', $shopping_cart, '€', '<br>';
    } elseif ($shopping_cart > 50 && $shopping_cart < 150) {
        echo 'Los gastos de envío son gratis', '<br>';
        echo ' precio total = ', $shopping_cart, '€', '<br>';

    } elseif ($shopping_cart > 150) {
        echo 'Los gastos de envío son gratis y 20% de descuento', '<br>';
        $descuento = $shopping_cart * 20;//lo calculo de esta forma para saber el %
        $descuento = $descuento / 100;
        $shopping_cart = $shopping_cart - $descuento;
        echo 'se ha descontado ';
        echo $descuento, '€', '<br>',' GIMBERNAT_20_%','<br>';
        echo ' precio total = ', $shopping_cart, '€', '<br>';

    }
    ?>
</p>
</body>
</html>
<