<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="order">
    <div class="receipt">
        <div class="food-icons">
                <?php
    $bread = '';
    $donut = '';
    $cake = '';
    $cookie = '';
    $muffin = '';

    foreach ($order as $item) {
        if ($item == 'bread') {
            echo '<img id="bread" src="images/bread-icon.png" alt="Bread">';
        } elseif ($item == 'donut') {
            echo '<img id="donut" src="images/donut-icon.png" alt="Donut">';
        } elseif ($item == 'cake') {
            echo '<img id="cake" src="images/cake-icon.png" alt="Cake">';
        } elseif ($item == 'cookies') {
            echo '<img id="cookie" src="images/cookie-icon.png" alt="Cookie">';
        } elseif ($item == 'muffin') {
            echo '<img id="muffin" src="images/muffin-icon.png" alt="Muffin">';
        }
    }
    ?>
        </div>
        <h1>Thank You!</h1>
        <h2><?php echo $orderstring; ?></h2>
        <h3 style="margin: 10px;padding-bottom: 10px;">Preparing Your Order...</h3>
    </div>
</body>
</html>