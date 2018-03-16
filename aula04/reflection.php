<?php 

class Aluno
{
	private $nome;
	private $cpf;

	public function __construct(string $nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
}
echo "<pre>";
$ref = new ReflectionClass('Aluno');
print_r($ref->getProperties());
print_r($ref->getMethods());