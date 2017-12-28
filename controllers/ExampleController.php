<?php

	class ExampleController implements Controller {
		public function doAction($req){
			$db = DB::getInstance();
			$page = $db->getPageByUri($req->getUri());
			$template = new Template('example.php');
			$template->assign(array(
				'title' => 'Example',
				'description' => 'Example page',
				'header' => 'Example page',
				'content' => $page['content']
			));
			$db->close();
			$template->display();
		}
	}

?>
