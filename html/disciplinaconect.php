<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$disciplina = [

    'nome' => 'caue',
    'ativo' => 'true'
];

$Vsalvos = UpdateQuery::table('disciplina')
->set($disciplina)
->where('id','=',122)
->update();

var_dump($Vsalvos);