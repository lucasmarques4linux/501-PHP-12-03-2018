<?php 

echo "<pre>";

$conexao = new PDO('pgsql:host=localhost;dbname=aula05','lucas','123');

$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// var_dump($conexao);
$sql = "INSERT INTO tb_alunos(nome,email,senha,cpf,rg,dtNasc) VALUES('Lucas Marques','lucas@lucas.com','123','123','123','1993-07-25')";
$conexao->exec($sql);

$sql = "SELECT * FROM tb_alunos";

$result = $conexao->query($sql);

$alunos = $result->fetchAll(PDO::FETCH_ASSOC);

print_r($alunos);