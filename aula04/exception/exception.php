<?php 

class NaoPodeDividirPorZeroException extends Exception{}
class NaoPodeZeroException extends Exception{}

function dividir(int $a, int $b){

	if ($b == 0) {
		throw new NaoPodeDividirPorZeroException;
	}
	if ($a == 0) {
		throw new NaoPodeZeroException("Proibido zero");
	}
	return $a / $b;
}

try {
	echo 30 * dividir(12,0);	
} catch (NaoPodeDividirPorZeroException $e){

} catch (NaoPodeZeroException $e){

}
catch (Exception $e) {
	echo "Erro: {$e->getMessage()}";
}
