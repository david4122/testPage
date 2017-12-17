<?php

	require_once "classes/Controller.php";

	class HomePageController implements Controller {
		public function doAction($req){
			$template = new Template('index.php');
			$template->assign(array(
				'title' => 'Testing',
				'description' => 'Test/learning page',
				'controller' => 'Home page controller'
			));
			$template->display();
		}
	}

?>
