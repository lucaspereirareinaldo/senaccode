



<?php
use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$quantidade_de_alunos = ($_POST['nome_fantasia']);
$data_de_inicio = ($_POST['data_inicio']);
$data_de_fim = ($_POST['data_fim']);



$turma = [

    'quantidade_de_alunos' => $quantidade_de_alunos,
    'data_de_inicio' => $data_de_inicio,
    'data_de_fim' => $data_de_fim

];


InsertQuery::table('turma')->save($turma);



