<?php 

class ProibidoResultadoMaiorCinquentaException extends Exception{}

class Calc
{
	// Soma
	// Não permitir número negativos
	// Não pertitir resultado maior que 50
	public static function soma(int $a,int $b){
		if ($a < 0 || $b < 0) {
			throw new Exception("Não permitir numeros negativos");
		}
		if ($a + $b > 50) {
			throw new ProibidoResultadoMaiorCinquentaException("Proibido resultado maior que 50");
		}
		return $a + $b;
	}
	// Subtração
	// Não permitir resultado menor que zero
	public static function subt(int $a,int $b){
		if ($a - $b < 0) {
			throw new Exception("Proibido resultado menor que 0");
		}
		return $a - $b;
	}
	// Multiplicação
	// Não permitir multiplicação por zero
	// Não permitir resultado maior que 50
	public static function mult(int $a,int $b){
		if ($a == 0 || $b == 0) {
				throw new Exception("Proibido Multiplicação por zero");
		}
		if ($a * $b > 50) {
				throw new Exception("Proibido resultado maior que 50");
		}	
		return $a * $b;
	}
	// Divisão
	// Não permitir divisão por zero
	// Não permitir valor Infinito $a == 0
	public static function divi(int $a,int $b){
		if ($b == 0) {
			throw new Exception("Proibido divisão por zero");
		}
		if ($a == 0) {
			throw new Exception("Proibido valor infinito");
		}
		return $a / $b;
	}
}

try {
	echo Calc::soma(40,11);
} catch (Exception $e)
{
	echo "Erro: {$e->getMessage()} <br>";
} 
catch (ProibidoResultadoMaiorCinquentaException $e) {
	echo "Erro: {$e->getMessage()} <br>";
}
try {
	echo Calc::subt(5,10);
} catch (Exception $e) {
	echo "Erro: {$e->getMessage()}<br>";
}
try {
	echo Calc::divi(5,0);
} catch (Exception $e) {
	echo "Erro: {$e->getMessage()}<br>";
}
try {
	echo Calc::mult(50,2);
} catch (Exception $e) {
	echo "Erro: {$e->getMessage()}<br>";
}