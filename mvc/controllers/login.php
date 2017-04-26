<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index(){
		$model = new Login_model();
		$this->view->render('login/index');
	}

	function run()
	{
		$this->model->run();
	}


}
