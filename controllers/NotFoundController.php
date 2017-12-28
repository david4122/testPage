<?php

	class NotFoundController implements Controller {
		public function doAction($req){
			$template = new Template('404.php');
			$template->set('message', 'Page not found!');
			$template->display();
		}
	}

?>
