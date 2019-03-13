<?php 

namespace Controller;

class UserController extends \Core\Controller
{
	public function indexAction(){
		$this->render('register');
	}

	public function registerAction(){
		$secure = new \Core\Request();
		$params = $secure->getQueryParams();

		$userModel = new \Model\UserModel($params);
		$userModel->create();
		header('Location: /connect');
	}

	public function connectAction(){
		$this->render('login');
		$secure = new \Core\Request();
		$params = $secure->getQueryParams();
		$connect = new \Model\UserModel($params);
	}
	public function displayAction(){
		$this->render('show');
		$secure = new \Core\Request();
		$params = $secure->getQueryParams();
		$userModel = new \Model\UserModel($params);
		$user = $userModel->read();

	}
	public function editAction(){}
	public function deleteAction(){}

}