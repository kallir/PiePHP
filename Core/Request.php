<?php

namespace Core;

class Request
{
	public function getQueryParams(){
		$params = [];
		if(isset($_REQUEST)){
			foreach ($_REQUEST as $key => $param) {
				$param = htmlspecialchars(trim(stripcslashes($param)));
				$params[$key] = $param;
			}
			return $params;
		}
	}
}