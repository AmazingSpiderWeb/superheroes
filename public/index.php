<?php 
require_once('../classes/navigation.php');
require_once('../classes/page_admin.php');

$nav = new Navigation();
$page = new Page(1);


include '../includes/header.php'; 
include('../includes/product_page.php');

$product = new Product($_GET['id']);
# If no page number was supplied ...
if(isset($_GET['page']) == false || $_GET['page'] == ''){
	# ... then use 1.
	$page_id = 1;
# But if it was supplied ...
}else{
	# ... then use it.
	$page_id = $_GET['page'];
}


include '../includes/footer.php'; 
?>