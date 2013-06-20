<?php

require_once('../classes/cart.php');

$cart = new Cart();

$cart->store_product($_POST['product_id'], $_POST['quantity']);

header('location: product_detail.php?msg=added&id='.$_POST['product_id']);