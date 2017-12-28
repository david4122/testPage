<?php

	require_once "config.php";

	class Template {
		private $template;
		private $variables;

		function __construct($template){
			$this->template = $template;
			$this->variables = array();
		}

		public function assign($array){
			$this->variables = array_merge($this->variables, $array);
		}

		public function set($var, $value){
			$this->variables[$var] = $value;
		}

		public function display(){
			extract($this->variables);
			$templateDir = constant('TEMPLATE_DIR');
			include $templateDir.'header.php';
			include $templateDir.$this->template;
			include $templateDir.'footer.php';
		}
	}

?>
