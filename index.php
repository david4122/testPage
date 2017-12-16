<?php
	if(isset($_GET['n'])){
		echo json_encode(array('increased' => $_GET['n']+1));
		die;
	}

	include "classes/Template.php";

	$template = new Template();
	$template->setTemplate('index.php');
	$template->assign(array(
		'title' => 'Testing',
		'description' => 'Test page'
	));
	$template->display();
?>
