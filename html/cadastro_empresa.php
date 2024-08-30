<?php
use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome_fantasia = ($_POST['nome_fantasia']);
$cnpj = ($_POST['cnpj']);
$inscricao_estual = ($_POST['inscricao_estadual']);
$data_de_nascimento = ($_POST['data']);



$empresa = [

    'nome_fantasia' => $quantidade_de_alunos,
    'cnpj' => $cnpj,
    'inscricao_estadual' => $inscricao_estual,
    'data_de_nascimento' => $data_de_nascimento

];


InsertQuery::table('empresa')->save($empresa);



