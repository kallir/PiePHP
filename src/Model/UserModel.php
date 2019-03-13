<?php

namespace Model;

class UserModel extends \Core\Entity
{
	public $id;
	private $orm;
	private static $relations = "has many historique";

	public function __construct($params){
		$this->orm = new \Core\ORM();
		$entity  = new \Core\Entity($params);
		if(isset($entity->email) && isset($entity->password)){
			$this->email = $entity->email;
			$this->password = $entity->password;
			$this->id = $entity::getId($this->email);
		}
	}

	public function create(){
		$this->orm->create('users',["email" => $this->email, "password" => $this->password, "username"=> $this->username]);
		return $this->id;
	}
	public function read(){
		return $this->orm->read('users', $this->id["id"]);
	}
	public function update($id){
		$update = new \Core\ORM();
		$udate->update('users', $id, []);
	}
	public function delete($id){
		$delete = new \Core\ORM();
		$delete->delete('users', $id);
	}
}