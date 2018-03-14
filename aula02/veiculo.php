<?php 

// Classe Pai - Veiculo
// Classes Filhas - Moto, Carro e Bicicleta
// Criar na classe pai todas as características em comum das classes filhas.

abstract class Veiculo
{
	private $cor;
	private $marca;
	protected $velocidade;

	public function setCor($cor){
		$this->cor = $cor;
	}
	public function getCor(){
		return $this->cor;
	}
	public function setVelocidade($velocidade){
		$this->velocidade = $velocidade;
	}
	public function getVelocidade(){
		return $this->velocidade;
	}

	abstract protected function acelerar();
	protected final function freiar(){}
}

class Moto extends Veiculo{
	public function acelerar(){
		$this->setVelocidade($this->getVelocidade() + 5 );
	}
}
class Carro extends Veiculo{
	public function acelerar(){
		$this->velocidade += 10;
	}
	public function freiar(){
		$this->velocidade -= 10;
	}
}
class Bike extends Veiculo{
	public function acelerar(){
		$this->velocidade += 2;
	}
}
echo "<pre>";
$car = new Carro();
$car->setCor("azul");
$car->acelerar();
var_dump($car);
$moto = new Moto();
$moto->acelerar();
var_dump($moto);
$bike = new Bike();
$bike->acelerar();
var_dump($bike);