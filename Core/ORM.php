<?php

namespace Core;

class ORM
{
	public function create($table, $fields){
		$keys = array();
		$values = array();
		$i = 0;
		foreach ($fields as $key => $value) {
			$keys[$i] = $key;
			$values[$i] = $value;
			$i++;
		}
		$query = "INSERT INTO $table (". implode(", ", $keys) .") VALUES ('". implode("', '", $values) ."')";

		$req = \Core\Database::prepareAction($query);
		$req->execute();
	}

	public function read($table, $id){
		if(null !== $id){
			$query = "SELECT * from users where id like $id";
			$req = \Core\Database::prepareAction($query);
			$req->execute();
			return $req->fetchAll();
		}
	}
	public function update($table, $id, $fields){
		return $boolean;
	}
	public function delete($table, $id){
		return $boolean;
	}
	public function find($table, $fparams = array(
		'WHERE' => '1',
		'ORDER BY' => 'id ASC',
		'LIMIT' => ""
	)){
		return $array;
	}
}