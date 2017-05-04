<?php

class Register extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index(){
		$model = new register_model();
		$this->view->render('register/index');
	}
	public function create()
	{

		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);


		$this->model->create($data);
		header('location: ' . URL . 'welcome');
}
}
