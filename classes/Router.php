<?php

	class Router {
		private static $request;

		public static function getRequest(){
			if(!self::$request)
				self::parseRequest();
			return self::$request;
		}

		public static function run(){
			$req = self::getRequest();
			$controller = $req->getController();
			$controller->doAction($req);
		}

		private function parseRequest(){
			$uri = $_SERVER['REQUEST_URI'];
			$uriArr = preg_split('/\/|\?/', $uri);

			$factory = new ControllerFactory();
			$controller = $factory->getController($uriArr[1]);

			$action = $uriArr[2];
			$params = $_GET;
			self::$request = new Request($uri, $controller, $action, $params);
		}
	}

?>
