<?php 

namespace Model;

use Model\Aluno;

class Turma
{
	private $aluno;

	public function __construct(Aluno $aluno){
		$this->aluno = $aluno;
	}

	public function getAluno(){
		return $this->aluno;
	}
	public function getAluNome(){
		return $this->aluno->getNome();
	}
}