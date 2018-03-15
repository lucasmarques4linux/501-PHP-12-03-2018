<?php 

require 'autoload.php';

use Model\Aluno;
use Model\Turma;

echo "<pre>";
$lucas = new Aluno('Lucas Marques');
print_r($lucas);
echo "<hr>";
$tur = new Turma($lucas);
print_r($tur);
echo "<hr>";
echo $tur->getAluno()->getNome();