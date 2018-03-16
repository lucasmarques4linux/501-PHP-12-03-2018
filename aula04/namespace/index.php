<?php 
// Serve pra organizar nossas classes
namespace Site;

require 'view.php';
require 'model.php';

// Chamando as classes de outros namespaces
use Model\Pessoa as ModelPessoa;
use View\Pessoa as ViewPessoa;
use DateTime as Data;

$viewPessoa = new ViewPessoa();
$modelPessoa = new ModelPessoa();

$data = new Data();
print_r($data);