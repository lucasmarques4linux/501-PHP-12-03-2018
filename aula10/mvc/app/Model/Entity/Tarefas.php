<?php 

namespace Model\Entity;

class Tarefas
{
	private $id;
	private $idUsuario;
	private $descricao;
	private $dtInicio;
	private $dtFim;
	private $status;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	}

	public function getIdUsuario()
	{
	    return $this->idUsuario;
	}
	
	public function setIdUsuario($idUsuario)
	{
	   $this->idUsuario = $idUsuario;
	}

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    $this->descricao = $descricao;
	}

	public function getDtInicio()
	{
	    return $this->dtInicio;
	}
	
	public function setDtInicio($dtInicio)
	{
	   $this->dtInicio = $dtInicio;
	}

	public function getDtFim()
	{
	    return $this->dtFim;
	}
	
	public function setDtFim($dtFim)
	{
	   $this->dtFim = $dtFim;
	}

	public function getStatus()
	{
	    return $this->status;
	}
	
	public function setStatus($status)
	{
	    $this->status = $status;
	}

}