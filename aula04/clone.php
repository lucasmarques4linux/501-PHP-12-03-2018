<?php 

class Aluno
{
	public $nome;

	public function __construct($nome){
		$this->nome = $nome;
	}
}

echo "<pre>";
$a = 2;
$b = $a;
$a = 3;
var_dump($a,$b);
echo "<hr>";

$lucas = new Aluno('lucas');
$joao = clone $lucas;
$lucas->nome = 'José';
$joao->nome = 'João';
var_dump($lucas,$joao);