<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

// Definindo os campos e valores a serem inseridos

$empresa = [

    'nome_fantasia' => 'pablo',
    'cnpj' => '2001-11-11',
    'inscricao_estadual' => '2001-11-11',
    'data_de_nascimento' => '2001-11-11'
];

InsertQuery::table('empresa')->save($empresa);


$empresa2 = [

    'nome_fantasia' => 'luiza',
    'cnpj' => '2011-01-11',
    'inscricao_estadual' => '2011-12-10',
    'data_de_nascimento' => '2001-10-11'
];

InsertQuery::table('empresa')->save($empresa2);

$empresa3 = [

    'nome_fantasia' => 'lana',
    'cnpj' => '2000-11-11',
    'inscricao_estadual' => '2011-10-10',
    'data_de_nascimento' => '2001-12-11'

];

InsertQuery::table('empresa')->save($empresa3);



