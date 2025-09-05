<?php
$total = 0;
$menuItems = ['bread'=>2,'cake'=>10,'cookies'=>5,'donut'=>3,'muffin'=>4];
$order = array();
if ($_POST == null) {
    header("Location: http://localhost/CSET-205%20Lecture%204%20Lab%203/shop.php");
    exit();
}
foreach ($menuItems as $item => $cost) {
    foreach ($_POST as $itemName => $selected) {
        if ($item == $itemName && $selected == 'on') {
            $total = $total + $cost;
            $order[] = $item;
        }
    }
}

$orderItems = implode(', ',$order);
$orderstring = "You ordered $orderItems. Your total is \$$total";
setcookie('lastOrdered',$orderstring, time() + (86400 * 30),"/");

require 'order.view.php';
 ?>