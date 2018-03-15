<?php 

class Pessoa
{
	private $nome;
	private $email;
	private $cpf;

	public function __construct(string $nome, string $email, string $cpf){
		$this->setNome($nome);
		$this->setEmail($email);
		$this->cpf = $cpf;
	}
	public function setNome(string $nome){
		if (strlen($nome) > 3) {
			$this->nome = $nome;
		} else {
			echo "Nome Inválido";
		}
	}
	public function setEmail(string $email){
		if ($this->validEmail($email)) {
			$this->email = $email;
		} else {
			echo "Email Inválido";
		}
	}
	private function validEmail(string $email) : bool{
		return filter_var($email, FILTER_VALIDATE_EMAIL) ? true :false;
	}
}

$jose = new Pessoa("jose", "jose","111");