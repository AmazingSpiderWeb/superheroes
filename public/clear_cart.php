<?php

require_once('../classes/cart.php');
$cart = new Cart();

$cart->clear();

header('location: view_cart.php');