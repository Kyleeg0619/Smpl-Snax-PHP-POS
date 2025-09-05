<?php
if ($_COOKIE['lastOrdered']) {
    echo $_COOKIE['lastOrdered'];
}
require 'shop.view.php';
?>