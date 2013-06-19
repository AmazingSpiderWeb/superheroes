<?php 

require_once('../classes/page.php');
include('../includes/admin_header.php');
include('../includes/admin_page.php');

$product = new Product($_GET['id']);

include('../includes/footer.php');

 ?>


