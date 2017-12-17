<?php

	class Request {
		private $uri;
		private $controller;
		private $action;
		private $params;

		public function __construct($uri, $controller, $action, $params){
			$this->uri = $uri;
			$this->controller = $controller;
			$this->action = $action;
			$this->params = $params;
		}

		public function getUri(){
			return $this->uri;
		}

		public function getController(){
			return $this->controller;
		}

		public function getAction(){
			return $this->action;
		}

		public function getParams(){
			return $this->params;
		}
	}

?>
