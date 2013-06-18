<?php

require_once('../classes/page_admin.php');

$page = new Page($_GET['page_id']);

$page->title = $_POST['title'];

$page->content = $_POST['content'];

$page->page_id = $_POST['page_id'];

$page->update();

// header('location: '.$_POST['location']);

header('location: '.$_POST['location']);