<?php 

interface TelevisaoInterface
{
	public function aumentarVolume();
	public function diminuirVolume();
	public function ligar();
	public function desligar();
	public function trocarCanal($canal);
}
interface txt
{
	public function test();
}

class TV implements TelevisaoInterface,txt
{
	public $volume = 10;
	public $canal = 5;
	public $estado = false;

	public function aumentarVolume(){
		$this->volume++;
	}
	public function diminuirVolume(){
		$this->volume--;
	}
	public function ligar(){
		$this->estado = true;
	}
	public function desligar(){
		$this->estado = false;
	}
	public function trocarCanal($canal){
		$this->canal = $canal;
	}
}
echo "<pre>";
$tv = new TV();
print_r($tv);
echo "<hr>";
$tv->ligar();
print_r($tv);
echo "<hr>";
$tv->aumentarVolume();
$tv->aumentarVolume();
$tv->aumentarVolume();
print_r($tv);
echo "<hr>";
$tv->diminuirVolume();
print_r($tv);
echo "<hr>";
$tv->trocarCanal(11);
print_r($tv);
echo "<hr>";
$tv->desligar();
print_r($tv);