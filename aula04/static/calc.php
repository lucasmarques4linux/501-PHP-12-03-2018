<?php 

class Calc
{
	public static function soma(int $a,int $b){
		return $a + $b;
	}
	public static function subt(int $a,int $b){
		return $a - $b;
	}
	public static function mult(int $a,int $b){
		return $a * $b;
	}
	public static function divi(int $a,int $b){
		return $a / $b;
	}
}

echo Calc::soma(1,2);
echo "<br>";
echo Calc::subt(1,2);
echo "<br>";
echo Calc::mult(1,2);
echo "<br>";
echo Calc::divi(1,2);
echo "<br>";