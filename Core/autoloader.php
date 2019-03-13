<?php

function autoloader($class){
	$root = $_SERVER['DOCUMENT_ROOT'] . Base_URI . "/src/";
	$current_dir = __DIR__  . strrchr($class, "\\") . '.php';
	$current_dir = str_replace("\\", "/", $current_dir);

	if(file_exists($current_dir)){
		include $current_dir;
	}else{
		if(file_exists($root . str_replace("\\", "/", $class) . '.php'))
			include $root . str_replace("\\", "/", $class) . '.php';
		else
			include $root . "View/Error/404.php"; 
	}
}
spl_autoload_register('autoloader');