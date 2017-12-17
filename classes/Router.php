<?php

	include "classes/Request.php";

	class Router {
		private static $request;

		public static function getRequest(){
			if(!self::$request){
				self::parseRequest();
			}
			return self::$request;
		}

		private function parseRequest(){
			$uri = $_SERVER['REQUEST_URI'];
			$uriArr = preg_split('/\/|\?/', $uri);
			$controller = $uriArr[1];
			$action = $uriArr[2];
			$params = $_GET;
			self::$request = new Request($uri, $controller, $action, $params);
		}
	}

?>
