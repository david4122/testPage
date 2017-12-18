<?php

	spl_autoload_register(function ($classname){
		if(file_exists('controllers/'.$classname.'.php')){
			require_once 'controllers/'.$classname.'.php';
		}
	});
		
	spl_autoload_register(function ($classname){
		if(file_exists('classes/'.$classname.'.php')){
			require_once 'classes/'.$classname.'.php';
		}
	});

	Router::run();
?>
