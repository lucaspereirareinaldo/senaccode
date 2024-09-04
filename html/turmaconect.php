<?php

use app\database\builder\UpdateQuery;

require __DIR__ .'/../vendor/autoload.php';

$turma = [

    'quantidade_alunos' =>'20',
    'data_inicio' => '2001-02-02',
    'data_fim' => '2001-02-02'
];

$vsalvou = UpdateQuery::table('turma')
->set($turma)
->where('id','=',1)
->update();

var_dump($vsalvou);
