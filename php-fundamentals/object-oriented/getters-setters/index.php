<?php

class Login
{
	private $email;
	private $password;
	private $name;

	public function __construct($email, $password, $name)
	{
		$this->email = $email;
		$this->password = $password;
		$this->name = $name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($data)
	{
		$email = filter_var($data, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function login()
	{
		if ($this->email == "teste@test.com" and $this->password == "123456"):
			echo "Logged!";
		else :
			echo "Wrong credencials";
		endif;
	}
}

$user = new Login("teste@test.com", "123456", "The Kid");

$user->login();
