<?php
use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome = ($_POST['nome']);
$cnpf = ($_POST['cnpf']);
$rg = ($_POST['rg']);
$data_de_nascimento = ($_POST['data']);



$aluno = [

    'nome' => $quantidade_de_alunos,
    'cnpf' => $cnpf,
    'rg' => $rg,
    'data_de_nascimento' => $data_de_nascimento

];


InsertQuery::table('aluno')->save($aluno);