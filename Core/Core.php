<?php

namespace Core;

class Core
{
	public function run(){
		require "./routes.php";

		$url = substr($_SERVER['REQUEST_URI'], strlen(Base_URI));
		$route = Router::get($url);
		if(isset($route)){
			$route["controller"] = ucfirst($route["controller"]);
			$ctrl = "Controller" . "\\" . $route["controller"] . "Controller";

			if(class_exists($ctrl)){
				if (isset($route["action"])) {
					$actn = $route["action"] . "Action";
				}else{$actn = "indexAction";}
				
				if(!method_exists($ctrl, $actn))
					$actn = "indexAction";
				
				$run = new $ctrl();
				$run->$actn();
			}
		}
		else{
			$ctrl = "Controller\UserController";
			$actn = "indexAction";
			$run = new $ctrl();
			$run->$actn();
		}
	}
}