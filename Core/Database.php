<?php
namespace Core;

$infos['dbname'] = "pie_php";
$infos['host'] = "localhost";
$infos['user'] = "root";
$infos['pwd'] = "R00t1234";

$pdo = new Database($infos);

class Database
{
	protected $infos; 
	public static $database;

	public function __construct($infos){
		$this->infos = $infos;
		$this->connectAction();
	}

	public function connectAction(){
		if(self::$database == null){
			$connect = "mysql:dbname=". $this->infos["dbname"] . ";host=" . $this->infos["host"];

			try{
				self::$database = new \PDO($connect, $this->infos["user"], $this->infos["pwd"]);
			} catch(PDOException $e){
				echo "EROOR DATABASE";
			}
		}
		else
			return self::$database;
	}

	public static function prepareAction($query){
		$request = self::$database->prepare($query);
		return $request;
	}
}