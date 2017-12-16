<?php

	require_once "config.php";

	class Template {
		private $template;
		private $variables;

		function __construct(){
			$this->variables = array();
		}

		public function setTemplate($template){
			$this->template = $template;
		}

		public function assign($array){
			$this->variables = array_merge($this->variables, $array);
		}

		public function display(){
			global $templateDir;
			extract($this->variables);
			include $templateDir.'header.php';
			include $templateDir.$this->template;
			include $templateDir.'footer.php';
		}
	}

?>