<?php

	function autoloadControllers($classname){
		if(file_exists('controllers/'.$classname.'.php')){
			require_once 'controllers/'.$classname.'.php';
		}
	}
		
	spl_autoload_register(autoloadControllers);

	function autoloadClasses($classname){
		if(file_exists('classes/'.$classname.'.php')){
			require_once 'classes/'.$classname.'.php';
		}
	}

	spl_autoload_register(autoloadClasses);

	Router::run();
?>
