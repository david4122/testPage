<?php

	require_once 'classes/Request.php';

	class ControllerFactory {
		public function getController($controller){
			switch($controller){
				case 'example':
					return new ExampleController();
				default:
					return new HomePageController();
			}
		}
	}

?>
