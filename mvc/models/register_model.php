<?php

class Register_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function create($data)
	{
		$sth = $this->db->prepare('INSERT INTO users
			(`login`, `password`)
			VALUES (:login, :password)
			');
		$sth->execute(array(
			':login' => $data['login'],
			':password' => $data['password']
		));
	}
}
