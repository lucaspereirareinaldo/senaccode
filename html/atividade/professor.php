<?php

use 
app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

// Definindo os campos e valores a serem inseridos




$professor = [

    'nome' => 'lucas',
    'cpf' => '000-000-000-00',
    'rg' => '00-111-000-1',
    'data_de_nascimento' => '2001.11.11'
];

InsertQuery::table('professor')->save($professor);


$professor2 = [

    'nome' => 'will',
    'cpf' => '000-123-321-00',
    'rg' => '10-123-000-1',
    'data_de_nascimento' => '2021.11.11'


];

InsertQuery::table('professor')->save($professor2);


$professor3 = [

    'nome' => 'eder',
    'cpf' => '123-123-321-00',
    'rg' => '10-123-000-1',
    'data_de_nascimento' => '2020.10.11'  

];

InsertQuery::table('professor')->save($professor3);
