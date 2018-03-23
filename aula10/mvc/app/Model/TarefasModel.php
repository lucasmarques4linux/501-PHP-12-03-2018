<?php 

namespace Model;

use Model\Mapper\TarefasMapper;
use Model\Entity\Tarefas;

class TarefasModel
{
	private $tarefasMapper;

	public function __construct(){
		$this->tarefasMapper = new TarefasMapper();
	}

	public function all(){
		return $this->tarefasMapper->findAll();
	}
	public function insert($data){
		$this->tarefasMapper->insert($data);
	}
}