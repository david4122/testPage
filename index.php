<?php

	include 'classes/Template.php';

	$template = new Template();
	$template->setTemplate('index.php');
	$template->assign(array(
		'title' => 'Testing',
		'description' => 'Test page'
	));
	$template->display();
?>
