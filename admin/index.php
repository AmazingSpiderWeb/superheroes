<?php 

require_once('../classes/page.php');
include('../includes/admin_header.php');
include('../includes/admin_page.php');

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

# load the page with the id
$product = new Product($_GET['id']);

include('../includes/footer.php');

 ?>


