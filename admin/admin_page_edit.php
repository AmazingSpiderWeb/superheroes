<?php 

require_once('../classes/page_admin.php');
require_once('../classes/form.php');

$form = new Form();
$page = new Page($_GET['id']);

include('../includes/admin_header.php'); 

	echo '<div class="main detail">';

<<<<<<< HEAD
	echo '<div class="description">';
	echo $form->open('update_admin_page.php', 'post', 'editForm');

	echo $form->label('title', 'Title');	

	echo $form->text('title', $page->title);
	echo $form->hidden('page_id', $page->page_id);
	echo $form->hidden('location', $page->location);


	echo $form->label('content', 'Content');

	echo $form->textarea('content', $page->content);

	echo '<br>';
	

		echo $form->submit('submit', 'SAVE');
	echo $form->close();

	echo '</div>';

=======
		echo '<div class="description">';
			echo $form->open('update_admin_page.php', 'post', 'editForm');

			echo $form->label('title', 'Title');	

			echo $form->text('title', $page->title);
			echo $form->hidden('page_id', $page->page_id);
			echo $form->hidden('location', $page->location);


			echo $form->label('content', 'Content');

			echo $form->textarea('content', $page->content);

			echo '<br>';
			

				echo $form->submit('submit', 'SAVE');
			echo $form->close();

		echo '</div>';

	echo '<div class="clear"></div>';
>>>>>>> 0f15a060c2b818338a3100b8792a9fc6fd99028d
	echo '</div>';

	include '../includes/footer.php'; 

	