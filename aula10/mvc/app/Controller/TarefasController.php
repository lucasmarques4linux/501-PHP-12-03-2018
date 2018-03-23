<?php 

namespace Controller;

use Lib\BaseView\BaseView;
use Model\TarefasModel;

class TarefasController
{
	private $viewModel;
	private $baseView;

	public function __construct(){
		$this->baseView = new BaseView();
		$this->tarefasModel = new TarefasModel();
	}
	public function index(){
		$tarefas = $this->tarefasModel->all();
		$this->baseView->render('tarefas/index',
			['tarefas' => $tarefas]);
	}
	public function new(){
		echo 'New TarefasController';
	}
	public function create(){
		echo 'Create TarefasController';
	}
	public function edit(){
		echo 'Edit TarefasController';
	}
	public function update(){
		echo 'Update TarefasController';
	}
}