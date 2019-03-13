<?php
namespace Core;

class Entity
{
	public function __construct(array $attributs){
		foreach ($attributs as $key => $attribut)
			$this->{$key} = $attribut;
	}
	public static function getId($email){
		$query = "SELECT id from users where email like '$email'";
		$req = \Core\Database::prepareAction($query);
		$req->execute();
		
		return $req->fetch();
	}
}