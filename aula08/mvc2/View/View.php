<?php 

namespace View;

class View
{
	public function render(array $data){
		// Extract
		// Transforma um array em variaveis
		// Ex.: array['nome' => Lucas,'empresa'=> '4linux'];
		// Ex.: $nome = Lucas; $empresa = '4Linux';
		// Ex.: echo $nome    >> 'Lucas';
		// Ex.: echo $empresa >> '4Linux';
		extract($data);
		include 'src/hello.php';
	}
}