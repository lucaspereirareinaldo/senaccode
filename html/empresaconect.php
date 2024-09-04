<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$empresa = [

    'nome_fantasia' =>'jj&a',
    'cnpj' => '2002-08-08',
    'inscricao_estadual' =>'2001-01-01',
    'data_de_nascimento' =>'2001-02-01'
];

$Vsalvos = UpdateQuery::table('empresa')
->set($empresa)
->where('id','=',29)
->update();

var_dump($Vsalvos);