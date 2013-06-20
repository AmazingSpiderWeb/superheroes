<?php

require_once('../classes/cart.php');
$cart = new Cart();

$cart->delete($_GET['id']);

header('location: view_cart.php');